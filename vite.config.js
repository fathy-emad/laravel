import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                //General Css + Js
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/_bootstrap/_bootstrap.css',
                'resources/js/_bootstrap/_bootstrap.js',
                'resources/css/_jquery/jquery-ui.css',
                'resources/js/_jquery/jquery-3.6.3.js',
                'resources/js/_jquery/jquery-ui.js',

                //User Auth
                'resources/fonts/material-icon/css/material-design-iconic-font.min.css',
                'resources/css/user/auth.css',
            ],
            refresh: true,
        }),
    ],
});
