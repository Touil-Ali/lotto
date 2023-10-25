<script setup>

</script>

<template>
    <div class="flex items-center justify-center space-x-2  items-center content-center mt-72">
        <div class="w-4 h-4 rounded-full animate-pulse bg-[#3354C0]"></div>
        <div class="w-4 h-4 rounded-full animate-pulse bg-[#3354C0]"></div>
        <div class="w-4 h-4 rounded-full animate-pulse bg-[#3354C0]"></div>
    </div>

</template>

<style scoped>
.animate-spinner-grow {
    @keyframes spinner-grow_0.75s_linear_infinite {
    0%, 100% {
        transform: scale(0);
    }
    50% {
        transform: scale(1);
    }
}

    @keyframes spinner-grow_1.5s_linear_infinite {
    0%, 100% {
        transform: scale(0);
    }
    50% {
        transform: scale(1);
    }
}
}
</style>
