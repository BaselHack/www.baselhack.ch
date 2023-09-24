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
                        color: theme('colors.yellow.500'),
                        '&:hover': {
                            color: theme('colors.yellow.400'),
                            textDecoration: 'underline',
                        }
                    }
                }
            },
        }),
        extend: {
            fontFamily: {
                'sans': ['Fira Code', 'monospace']
            },
            fontSize: {
                'sm':   '0.875rem',      // 16px - small
                'base': '1.1rem',        // 18px - p, default
                'xl':   '1.5rem',        // 24px - h3
                '2xl':  '1.75rem',       // 28px - h2
                '3xl':  '2rem',          // 32px - h1
                '4xl':  '2.25rem',       // 36px
                '5xl':  '2.5rem',        // 40px
                '6xl':  '3rem',          // 48px
            },
            /* 
            fontSize: {
                "4xl": ["4.292rem", "5.5rem"],
                "3xl": ["3.433rem", "4.125rem"],
                "2xl": ["2.747rem", "4.125rem"],
                "xl": ["2.197rem", "2.75rem"],
                "lg": ["1.758rem", "2.75rem"],
                "md": ["1.406rem", "2.75rem"],
                "base": ["1.125rem", "2.75rem"],
                "sm": ["0.9rem", "1.375rem"],
                "xs": ["0.72rem", "1.375rem"]
              },
              spacing: {
                "quarter": "0.34375rem",
                "half": "0.6875rem",
                "one": "1.375rem",
                "two": "2.75rem",
                "three": "4.125rem",
                "four": "5.5rem",
                "five": "6.875rem",
                "six": "8.25rem",
                "eight": "11rem",
                "twelve": "16.5rem",
                "sixteen": "22rem"
              },
            */
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
