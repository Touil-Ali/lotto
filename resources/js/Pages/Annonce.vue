<script setup>
import {ref} from "vue";
import AppLayout from "@/Pages/layouts/AppLayout.vue";

 let car = ref([]);

 const sumbitForm = () => {
 }
</script>

<template>
    <app-layout>
        <div>
            <h1>Create Car Ad</h1>
            <form @submit.prevent="submitForm">
                <div>
                    <label for="make">Make:</label>
                    <input type="text" id="make" v-model="car.make" required>
                </div>
                <div>
                    <label for="model">Model:</label>
                    <input type="text" id="model" v-model="car.model" required>
                </div>
                <div>
                    <label for="lat">Latitude:</label>
                    <input type="number" id="lat" v-model="car.lat" required>
                </div>
                <div>
                    <label for="lng">Longitude:</label>
                    <input type="number" id="lng" v-model="car.lng" required>
                </div>
                <div>
                    <label for="year">Year:</label>
                    <input type="number" id="year" v-model="car.year" required>
                </div>
                <div>
                    <label for="color">Color:</label>
                    <input type="text" id="color" v-model="car.color" required>
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea id="description" v-model="car.description"></textarea>
                </div>
                <div>
                    <label for="price_per_hour">Price per Hour:</label>
                    <input type="number" id="price_per_hour" v-model="car.price_per_hour" required>
                </div>
                <div>
                    <label for="available">Available:</label>
                    <input type="checkbox" id="available" v-model="car.available">
                </div>
                <div>
                    <label for="image">Image URL:</label>
                    <input type="text" id="image" v-model="car.image">
                </div>
                <button type="submit">Submit</button>
            </form>
        </div>
    </app-layout>
</template>

<style scoped>

</style>
