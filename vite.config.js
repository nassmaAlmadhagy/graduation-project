import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    css: {
        transformer: 'lightningcss',
     },
     // ot
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),

    ],
    build:{
        rollupOptions:{
            output:{
                assetFileNames:'assets/[name]-[hash].[ext]'
            }
        }
    }
});
