import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js',
                'resources/js/login.js',
                'resources/css/login.css',
                'resources/js/inicioo.js',
                'resources/css/inicio.css',
                'resources/css/test.css',
                'resources/js/usuario.js',
                'resources/css/usuario.scss',
               
                
            ],
            refresh: true,
        }),
    ],
});
