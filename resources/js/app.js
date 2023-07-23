import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'

import AppLayout from "@/Pages/layouts/AppLayout.vue";

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
    setup: function ({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .component('AppLayout', AppLayout)
            .mount(el)
    },
})

