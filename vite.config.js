import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/welcome.css",
                "resources/css/register.css",
                "resources/css/login.css",
                "resources/css/order.css",
                "resources/css/menu.css",
                "resources/js/app.js",
                "resources/css/payment.css",
            ],
            refresh: true,
        }),
    ],
});
