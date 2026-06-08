import path from "path";
import { fileURLToPath } from "url";
import tailwindcss from "@tailwindcss/vite";
import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

const __dirname = path.dirname(fileURLToPath(import.meta.url));

export default defineConfig({
    resolve: {
        alias: {
            "@": path.resolve(__dirname, "./resources/ts"),
            "@workbench": path.resolve(__dirname, "./workbench/resources/js"),
        },
    },
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
});
