import '../css/tailwind.css';
import './bootstrap';


import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import AppLayout from "@/Pages/layouts/AppLayout.vue";
import VehicleCard from './Pages/VehicleCard.vue';

import Welcome from "@/Pages/Welcome.vue";
import SearchResults from "@/Pages/layouts/SearchResults.vue";

import VehiculeMap from "@/Pages/VehiculeMap.vue";


createInertiaApp( {
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
    setup: function ({el, App, props, plugin}) {
        const app = createApp({render: () => h(App, props)})
            .use(plugin)
            .component('AppLayout', AppLayout)
            .component('VehicleCard', VehicleCard);
        app.mount(el)
    },
})

