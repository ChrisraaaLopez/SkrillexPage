import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 'resources/js/app.js',
                'resources/css/estilo_index.css', 'resources/css/estilo_galeria.css', 'resources/css/estilo_contacto.css',
                'resources/js/script_index.js', 'resources/js/script_contacto.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});