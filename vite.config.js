import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/Style/Style.css', 'resources/script/logic.js', 'resources/image/*'],
            refresh: true,
        }),
    ],
});
