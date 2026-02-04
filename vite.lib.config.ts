import vue from "@vitejs/plugin-vue";
import { resolve } from "path";
import { defineConfig } from "vite";
import dts from "vite-plugin-dts";

export default defineConfig({
    plugins: [
        vue(),
        dts({
            insertTypesEntry: true,
            tsconfigPath: "./tsconfig.json",
        }),
    ],
    build: {
        lib: {
            entry: resolve(__dirname, "resources/ts/index.ts"),
            name: "BladeKit",
            fileName: "blade-kit",
            formats: ["es"],
        },
        rollupOptions: {
            external: ["vue"],
            output: {
                globals: {
                    vue: "Vue",
                },
            },
        },
        outDir: "dist",
        emptyOutDir: true,
    },
    resolve: {
        alias: {
            "@": resolve(__dirname, "resources/ts"),
        },
    },
});
