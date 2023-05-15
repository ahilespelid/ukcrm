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

                'resources/assets/js/widgets.bundle.js',
                'resources/assets/js/custom/widgets.js',
                'resources/assets/js/custom/apps/chat/chat.js',
                'resources/assets/js/custom/utilities/modals/upgrade-plan.js',
                'resources/assets/js/custom/utilities/modals/create-app.js',
                'resources/assets/js/custom/utilities/modals/users-search.js',
                //lk
                'resources/assets/css/bootstrap.min.css',
                'resources/assets/css/dataTables.bootstrap5.min.css',
                'resources/assets/js/jquery.min.js',
                'resources/assets/js/jquery.dataTables.min.js',
                'resources/assets/js/dataTables.bootstrap5.min.js',
                'resources/assets/js/bootstrap.bundle.min.js',
                //lk img
                'resources/assets/media/uk/logo-uk.gif',
                'resources/assets/media/uk/user.png',
                //admin img
                'resources/assets/media/icons/duotune/communication/com006.svg',
            ],
            refresh: true,
        }),
    ],
});
