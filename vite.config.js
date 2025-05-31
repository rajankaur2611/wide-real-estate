import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/admin/custom-admin.scss',
                'resources/scss/home.scss',
                'resources/scss/about.scss',
                'resources/scss/our_projects.scss',
                'resources/scss/single_estate.scss',
                'resources/scss/app.scss',
                'resources/scss/animations.scss',
                'resources/scss/contact.scss',
                'resources/js/app.js',
                'resources/js/common.js',
                'resources/js/contact.js',
                'resources/js/index.js'
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `@use "resources/scss/variables" as *;`,
            },
        },
    },
});
