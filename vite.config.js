import tailwindcss from "@tailwindcss/vite";
import vue from "@vitejs/plugin-vue";
import laravel from "laravel-vite-plugin";
import { defineConfig } from "vite";

export default defineConfig({
    resolve: {
        tsconfigPaths: true,
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
