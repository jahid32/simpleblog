import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {
                    "primary": "#006eff",

                    "secondary": "#97b900",

                    "accent": "#695600",

                    "neutral": "#30212c",

                    "base-100": "#fffaff",

                    "info": "#0080fc",

                    "success": "#00b650",

                    "warning": "#ac3800",

                    "error": "#ff001e",
                },
            },
        ],
    },
    plugins: [forms, require("daisyui")],
};
