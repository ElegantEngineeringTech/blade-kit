import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    plugins: [
        tailwindcss(),
        laravel({
            hotFile: "public/vendor/blade-kit/blade-kit.hot", // Most important lines
            buildDirectory: "vendor/blade-kit", // Most important lines
            input: ["workbench/resources/css/demo.css"],
            refresh: true,
        }),
    ],
});
