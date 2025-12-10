import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/style.css', 'resources/js/app.js', 'resources/js/utility/lowongan.js', 'resources/js/utility/profil-mahasiswa.js','resources/js/utility/profil-mitra.js', 'resources/js/utility/register.js'],
            refresh: true,
        }),
    ],
});
