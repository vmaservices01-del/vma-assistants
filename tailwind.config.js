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
                sans: ['"Open Sans"', ...defaultTheme.fontFamily.sans],
            },

            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
                'left': 'slide-left 40s linear infinite',
                'right': 'slide-right 40s linear infinite',
            },

            keyframes: {
                'infinite-scroll': {
                    // Corrected: Use colon instead of space, wrap values in quotes, remove semicolons
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-50%)' },
                },
                'slide-left': {
                    from: { transform: 'translateX(0)' },
                    to: { transform: 'translateX(-100%)' },
                },
                'slide-right': {
                    from: { transform: 'translateX(-100%)' },
                    to: { transform: 'translateX(0)' },
                }
            }
        },
    },

    plugins: [forms],
};