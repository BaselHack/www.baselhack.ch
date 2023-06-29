const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: '2rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
        typography: (theme) => ({
            DEFAULT: {
                css: {
                    a: {
                        color: theme('colors.teal.300'),
                    }
                }
            },
        }),
        extend: {
            fontFamily: {
                'sans': ['Fira Code', 'monospace']
            },
            fontSize: {
                'sm': '0.88889rem',     // 16px - small
                'base': '1rem',         // 18px - p, default
                'xl': '1.33333rem',     // 24px - h3
                '2xl': '1.55556em',     // 28px - h2
                '3xl': '1.77778rm',     // 32px - h1
                '4xl': '2em',           // 36px
                '5xl': '2.22222rem',    // 40px
            },
            colors: {
                gray: colors.neutral,
                black: colors.black,
                white: colors.white,
                yellow: {
                    DEFAULT: '#F2E94D',
                    'accent': '#d4ca17',
                    50: '#FEFEF8',
                    100: '#FDFCE5',
                    200: '#FAF7BF',
                    300: '#F8F299',
                    400: '#F5EE73',
                    500: '#F2E94D',
                    600: '#EEE319',
                    700: '#C1B70E',
                    800: '#8C850A',
                    900: '#585406',
                    950: '#3E3B05',
                },
                teal: {
                    DEFAULT: '#5EBDC9',
                    'accent': '#3298a6',
                    50: '#E7F5F7',
                    100: '#D8EFF2',
                    200: '#BAE3E8',
                    300: '#9BD6DD',
                    400: '#7DCAD3',
                    500: '#5EBDC9',
                    600: '#3CA6B3',
                    700: '#2E7F89',
                    800: '#20585F',
                    900: '#123135',
                    950: '#0B1D20'
                }
            }
        },
    },

    plugins: [
        require('@tailwindcss/forms'), 
        require('@tailwindcss/typography')
    ],
};
