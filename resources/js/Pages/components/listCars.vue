<script setup>
import {ref, defineEmits } from 'vue';
const props = defineProps( {
    cars: Object,
})

const emits = defineEmits();

const selectCar = (car) => {
    emits('car-selected', car);
}
</script>

<template>
    <div class="flex flex-col justify-center" >
        <ul class="divide-y divide-gray-200" role="list" >
            <li class="py-4 flex cursor-pointer hover:opacity-70 transition"
                v-for="car in cars"
                :key="car.id"
                @click="selectCar(car)"
            >
                <div class="w-full md:w-2/3 bg-white grid place-items-center">
                    <div class="relative flex flex-col md:flex-row md:space-x-5 space-y-3 md:space-y-0 rounded-xl shadow-lg p-3 max-w-xs md:max-w-3xl mx-auto border border-white bg-white">
                        <img :src="`/img/cars/${car.image}`" alt="car image" class="w-32 h-32 md:w-48 md:h-auto object-cover rounded-xl" />
                    </div>
                </div>
                <div class="w-full md:w-2/3 flex flex-col space-y-2 p-3">
                    <div class="flex justify-between items-center">
                        <div class="min-w-0 flex-auto">
                            <h1 class="font-black text-gray-800 md:text-3xl text-xl">{{ car.make }}</h1>
                            <p class="text-gray-600">{{ car.model }}</p>
                            <p class="text-bold text-right	">${{ car.price_per_hour }}/day</p>

                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</template>


<style scoped>


</style>
