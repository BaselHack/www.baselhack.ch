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
        extend: {
            fontFamily: {
                'sans': ['Inconsolata', 'monospace']
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
                gray: colors.trueGray,
                black: colors.black,
                white: colors.white,
                yellow: {
                    DEFAULT: '#f2e94d',
                    'accent': '#d4ca17',
                },
                teal: {
                    DEFAULT: '#5ebdc9',
                    'accent': '#3298a6',
                }
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        "*": {
                            color: theme('colors.white'),
                        }
                    }
                },
            }),
        },
    },

    plugins: [
        require('@tailwindcss/forms'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio')
    ],
};
