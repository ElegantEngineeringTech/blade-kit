import defaultTheme from "tailwindcss/defaultTheme";

const { addDynamicIconSelectors } = require("@iconify/tailwind");

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: "selector",
    content: [
        "./vendor/elegantly/livewire-modal/resources/views/**/*.blade.php",
        "./vendor/elegantly/blade-kit/resources/views/**/*.blade.php",
        "./vendor/elegantly/blade-kit/src/Ui/**/*.php",
        "./vendor/elegantly/laravel-invoices/resources/views/**/*.blade.php",
        "./vendor/elegantly/laravel-cookies-consent/resources/views/**/*.blade.php",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/**/*.blade.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                ibm: ["IBM Plex Mono", ...defaultTheme.fontFamily.sans],
                sans: ["Plus Jakarta Sans", ...defaultTheme.fontFamily.sans],
                serif: ["Instrument Serif", ...defaultTheme.fontFamily.serif],
            },
            colors: {
                pink: {
                    50: "#fff2fb",
                    100: "#ffe3f9",
                    200: "#ffc6f4",
                    300: "#ff99e5",
                    400: "#ff5dd5",
                    500: "#ff21ce",
                    600: "#ff00d6",
                    700: "#cf00a9",
                    800: "#a90088",
                    900: "#89066d",
                    950: "#5e004b",
                },
            },
            backgroundImage: {
                select: `url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e")`,
            },
            animation: {
                "spin-fast": "spin 0.5s linear infinite",
            },
        },
    },

    plugins: [
        require("@tailwindcss/typography"),
        require("tailwindcss-animate"),
        addDynamicIconSelectors(),
    ],
};
