const colors = require("tailwindcss/colors");

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        fontFamily: {
            'sans': ['hack', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', "Segoe UI", 'Roboto', "Helvetica Neue", 'Arial', "Noto Sans", 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"]
        },
        extend: {},
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
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
