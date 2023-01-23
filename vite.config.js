import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //General Css + Js
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/bootstrap/bootstrap.css',
                'resources/js/bootstrap/bootstrap.js',
                'resources/js/jquery.min.js',

                //User Auth
                'resources/fonts/material-icon/css/material-design-iconic-font.min.css',
                'resources/css/user/auth.css',
            ],
            refresh: true,
        }),
    ],
});
