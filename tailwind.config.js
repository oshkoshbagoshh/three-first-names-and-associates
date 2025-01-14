import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                rubik: ['Rubik', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'blue-violet': '#8A2BE2',
                'sapphire': '#0F52BA',
                'indigo': '#4B0082',
                'electric-blue': '#51E5FF',
                'smoky-black': '#100B00',
            },
        },
    },

    plugins: [forms],
};
