<script setup>
const props = defineProps({
    carDetails: Object,
})
</script>

<template>
    <div v-if="carDetails">
        <h2>{{ carDetails.make }} {{ carDetails.model }}</h2>
        <!-- Display other car details here -->

    </div>
</template>

<style scoped>

</style>
