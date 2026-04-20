import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    // theme: {
    //     extend: {
    //         fontFamily: {
    //             sans: ['Figtree', ...defaultTheme.fontFamily.sans],
    //         },
    //     },
    // },
    theme: {
        extend: {
            fontFamily: {
                body: ['Inter', 'sans-serif'],
                headline: ['Inter', 'sans-serif'],
            },
            "colors": {
                "on-surface-variant": "#43474e",
                "on-secondary-fixed-variant": "#4a0080",
                "on-secondary-container": "#24005a",
                "inverse-on-surface": "#f1f0f4",
                "surface": "#fdfbff",
                "background": "#fdfbff",
                "outline-variant": "#c4c6d0",
                "primary-fixed": "#eaddff",
                "surface-variant": "#e1e2ec",
                "secondary-fixed": "#eaddff",
                "error-container": "#ffdad6",
                "inverse-primary": "#d0bcff",
                "on-tertiary-fixed": "#1d192b",
                "on-background": "#1c1b1f",
                "on-secondary": "#ffffff",
                "surface-container": "#f3edf7",
                "surface-container-highest": "#e6e1e5",
                "tertiary-fixed": "#ffd8e4",
                "inverse-surface": "#313033",
                "on-tertiary-fixed-variant": "#49454f",
                "on-error": "#ffffff",
                "on-surface": "#1c1b1f",
                "primary": "#6a0dad",
                "primary-container": "#eaddff",
                "on-primary-fixed-variant": "#4f008c",
                "on-primary": "#ffffff",
                "outline": "#74777f",
                "tertiary-fixed-dim": "#efb8c8",
                "tertiary": "#7d5260",
                "surface-dim": "#ded8e1",
                "secondary-container": "#6a0dad",
                "surface-bright": "#fdfbff",
                "error": "#ba1a1a",
                "on-primary-fixed": "#21005d",
                "surface-tint": "#6a0dad",
                "on-error-container": "#410002",
                "on-tertiary-container": "#31111d",
                "secondary": "#6a0dad",
                "on-primary-container": "#21005d",
                "tertiary-container": "#ffd8e4",
                "surface-container-lowest": "#ffffff",
                "on-secondary-fixed": "#21005d",
                "surface-container-low": "#f7f2fa",
                "secondary-fixed-dim": "#d0bcff",
                "surface-container-high": "#ece6f0",
                "on-tertiary": "#ffffff",
                "primary-fixed-dim": "#d0bcff"
            },
            "borderRadius": {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
            },
            "fontFamily": {
                "headline": ["Inter"],
                "body": ["Inter"],
                "label": ["Inter"]
            }
        },
    },

    plugins: [forms],
};
