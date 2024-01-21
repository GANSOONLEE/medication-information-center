import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import Vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        Vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                'resources/view/**/*.blade.php',
            ],
        }),
    ],
    publicDir: '../public',
    resolve: {
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js'
        }
    },
    base: './',
    build: {
        minify: "terser",
        target: "esnext",
        outDir: 'public/build',
        manifest: true,
        assetsDir: '.',
    },
});
