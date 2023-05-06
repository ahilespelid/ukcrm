import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/style.bundle.css',
                'resources/assets/plugins/global/plugins.bundle.css',
                'resources/assets/plugins/global/plugins.bundle.js',
                'resources/assets/js/scripts.bundle.js',
                'resources/assets/js/custom/authentication/sign-in/general.js',
            ],
            refresh: true,
        }),
    ],
});
