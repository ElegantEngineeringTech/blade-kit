import tailwindcss from "@tailwindcss/vite";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";
import vue from "@vitejs/plugin-vue";
import path from "path";

export default defineConfig({
    plugins: [
        vue(),
        tailwindcss(),
        laravel({
            hotFile: "public/vendor/blade-kit/blade-kit.hot",
            buildDirectory: "vendor/blade-kit",
            input: ["workbench/resources/css/demo.css", "workbench/resources/js/app.ts"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./resources/ts"),
        },
    },
});
