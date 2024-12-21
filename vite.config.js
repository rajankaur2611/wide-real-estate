import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/admin/custom-admin.scss',
                'resources/scss/home.scss',
                'resources/scss/app.scss',
                'resources/scss/contact.scss',
                'resources/js/app.js',
                'resources/js/common.js'
            ],
            refresh: true,
        }),
    ],
});
