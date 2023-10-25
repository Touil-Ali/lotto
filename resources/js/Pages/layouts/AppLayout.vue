<script setup>

import Header from "@/Pages/layouts/Header.vue"
import Footer from "./Footer.vue";
</script>

<template>
    <div>
        <Header></Header>
        <main>
            <slot>

            </slot>
        </main>
        <Footer></Footer>
    </div>
</template>

<style scoped>

</style>
