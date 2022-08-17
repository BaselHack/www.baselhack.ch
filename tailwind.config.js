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
            yellow: colors.yellow
        }
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
