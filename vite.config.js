import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import SvgLoader from 'vite-svg-loader';

export default defineConfig({
    plugins: [
        SvgLoader(),
        vue(),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
      
    ],
});
