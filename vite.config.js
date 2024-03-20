import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // 'resources/scss/_variables.scss',
                'resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss',
                // 'resources/css/layouts.css', 'resources/js/layouts.js', 'resources/scss/layouts.scss',
                // 'resources/css/users.css', 'resources/js/users.js', 'resources/scss/users.scss',
            ],
            refresh: true,
        }),
    ],

    // ↓↓　WSL使用時のみ必要なコード　↓↓
    server: {
        hmr: {
            host: 'localhost'
        }
    }
    // ↑↑　WSL使用時のみ必要なコード　↑↑
});
