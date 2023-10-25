<script setup>

import {onMounted, reactive, ref} from "vue";
import L from "leaflet";
// import Search from "@/Pages/components/search.vue"; // Import the Leaflet library
import "leaflet-control-geocoder";
import CarDetails from "@/Pages/components/CarDetails.vue";
import ListCars from "@/Pages/components/listCars.vue";
import IsLoading from "@/Pages/components/IsLoading.vue";
import CarNotFound from "@/Pages/components/carNotFound.vue";

const map = ref(null);
const cars = reactive([]);
const selectedCar = ref(null);
const moroccoBounds = L.latLngBounds(L.latLng(27.666, -13.276), L.latLng(36.041, -0.998));
const selectedCarDetails = ref(null);
let ifSelected = ref(false);
const isLoading = ref(false);


onMounted(async () => {
    try {
        
        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(async (position) => {
                const {latitude, longitude} = position.coords;

// Fetch map data using the user's location
                if (!isNaN(latitude) && !isNaN(longitude)) {
                    const mapDataResponse = await axios.get(`https://ipapi.co/${latitude},${longitude}/json/`);
                    const userIp = mapDataResponse.data.ip;
                    const [latitudeStr, longitudeStr] = userIp.split(',');

                    const mapData = {
                        lat: parseFloat(latitudeStr),
                        lng: parseFloat(longitudeStr),
                        zoom: 11,
                    };


// Fetch initial car data from the server using Inertia.js
//const carDataResponse = await axios.get('/car-data');
// Assuming the API responses are returning JSON data as shown in the provided example
//allCars.push(...carDataResponse.data);


// Initialize the map and display car markers based on the initial data
                    try {
                        map.value = initMap(mapData);

                    }  catch (error) {
                        console.error('Error:', error);
                // Handle the error
                    
                    }

                    map.value.on('moveend', updateCarList);
//map.value.on('zoom', () => {
//    displayAllCarMarkers(allCars);
// });
                    const customGeocoder = L.Control.Geocoder.nominatim({
                        geocodingQueryParams: {countrycodes: 'MA'}, // Limit to Morocco
                    });
                    const searchControl = L.Control.geocoder({
                        defaultMarkGeocode: false,
                        placeholder: 'Search for cars by City',
                        position: 'topleft',
                        geocoder: customGeocoder,
                        showResultIcons: false,
                        bounds: moroccoBounds,
                    }).on('markgeocode', (event) => {
                        const {center} = event.geocode;
                        map.value.panTo(center);
                        updateCarList();
                    });
                    searchControl.addTo(map.value);

                } else {
                    console.error('Invalid latitude or longitude values:', latitude, longitude);

                }
            });

        } 
    } catch (error) {
        console.error('Error:', error);
// Handle the error
       
    }
});

const initMap = (mapData) => {
    const mapInstance = L.map("map").setView([mapData.lat, mapData.lng], mapData.zoom);
    L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}.png',
        {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors',

        }
    ).addTo(mapInstance);
    mapInstance.on('popupopen', (event) => {
        selectedCar.value = cars.find(car => car.id === event.popup.options.carId);
    });

    return mapInstance;
};
const toggleSelect = () => {
    ifSelected.value = !ifSelected.value;
    selectedCarDetails.value = null;
}

const displayCarMarkers = (carData) => {
// Clear existing markers before adding new ones
    clearCarMarkers();
// Assuming carData is an array of objects containing car information

    carData.forEach((car) => {

        const carMarker = L.divIcon({
            className: 'car-marker',
            iconSize: [30, 30],
            html: `${car.price_per_hour.toFixed(2)}$`, // Display car price
        });
        const marker = L.marker([car.lat, car.lng], {icon: carMarker})
            .addTo(map.value)
            .bindPopup(`<div>${car.make} ${car.model}</div><div>Price: $${car.price_per_hour.toFixed(2)}</div>`)
        marker.on('click', () => {
            selectedCarDetails.value = car;
            ifSelected.value = true;
            isLoading.value = true;
            setTimeout(() => {
                isLoading.value = false;
            }, 3000)
        })
        marker.on('popupclose', () => {
            ifSelected.value = false; // Close the selected car details when the popup is closed
        });
    });
};

const clearCarMarkers = () => {
// Your logic to clear existing car markers from the Leaflet map
// For example, remove all markers from the map
    if (map.value) {
        map.value.eachLayer((layer) => {
            if (layer instanceof L.Marker) {
                map.value.removeLayer(layer);
            }
        });
    }
};

const updateCarList = () => {
    isLoading.value = true;
    const mapCenter = map.value.getCenter();
    const newLatitude = mapCenter.lat;
    const newLongitude = mapCenter.lng;

// Calculate the maximum distance (in degrees) that defines "close" to the center
    const maxDistanceDegrees = 0.2; // Adjust this value as needed

// Fetch car data based on the new map center (latitude and longitude)
    fetchCarData(newLatitude, newLongitude)
        .then((newCarData) => {

// Filter the new car data to include only cars close to the center
            const filteredCarData = newCarData.filter((car) => {
                const distanceLat = Math.abs(car.lat - newLatitude);
                const distanceLng = Math.abs(car.lng - newLongitude);
                return distanceLat <= maxDistanceDegrees && distanceLng <= maxDistanceDegrees;
            });

// Clear existing car markers and add new markers
            clearCarMarkers();
            displayCarMarkers(filteredCarData);

// Update the cars reactive array with the new data
            cars.length = 0; // Clear the array
            cars.push(...filteredCarData);
            isLoading.value = false;
        })
        .catch((error) => {
            console.error('Error fetching car data:', error);
            isLoading.value = false;
        });
};

const fetchCarData = async (latitude, longitude) => {
    try {
        const carDataResponse = await axios.get(`/car-data?lat=${latitude}&lng=${longitude}`);
        return carDataResponse.data;
    } catch (error) {
        throw error;
    }
};

const onCarSelected = (selectedCar) => {
    isLoading.value = true;
    toggleSelect();
    selectedCarDetails.value = selectedCar;
    setTimeout(() => {
        isLoading.value = false;
    }, 3000)
}
</script>


<template>

    <div class="map-container">
        <div id="map" class="resizable"></div>
        <div class="car-list resizable">
            <div v-if="isLoading">
                <is-loading></is-loading>
            </div>
            <div v-else-if="!cars.length">
                <car-not-found></car-not-found>
            </div>
            <div v-else-if="!ifSelected">
                <list-cars :cars="cars" @car-selected="onCarSelected"></list-cars>
            </div>
            <div v-else-if="ifSelected">
                <car-details :carDetails="selectedCarDetails"></car-details>
                <button v-if="ifSelected" @click="toggleSelect()">Close</button>
            </div>

        </div>
    </div>

</template>

<style>
.map-container {
    display: flex;
    overflow: hidden;
}

#map {
    flex: 2; /* Adjust the flex value as needed */
    width: 60%; /* Set the width for the map */
    height: 100vh; /* Set map height */
}

.resizable {
    resize: horizontal; /* Allow horizontal resizing */
    min-width: 200px; /* Minimum width for the resizable containers */
}

.car-list {
    flex: 1; /* Adjust the flex value as needed */
    overflow-y: auto; /* Add scrollbar when content overflows */
    padding: 10px;
    border-left: 1px solid #ccc;
    height: 100vh;
}

.car-marker {
    background-color: #3354C0; /* Example background color */
    color: whitesmoke;
    border-radius: 40%; /* Make it a rounded box */
    width: 40px !important;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    font-weight: bold;
    font-size: 12px;
}
</style>
