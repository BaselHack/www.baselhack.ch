const colors = require('tailwindcss/colors');

module.exports = {
    content: ['./resources/views/**/*.blade.php'],
    darkMode: 'media', // or 'media' or 'class'
    theme: {
        fontFamily: {
            'sans': ['hack', 'ui-sans-serif', 'system-ui', '-apple-system', 'BlinkMacSystemFont', "Segoe UI", 'Roboto', "Helvetica Neue", 'Arial', "Noto Sans", 'sans-serif', "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"]
        },
        extend: {},
        colors: {
            gray: colors.neutral,
            black: colors.black,
            white: colors.white
        }
    },
    variants: {
        extend: {},
    },
    plugins: [require('@tailwindcss/typography'), require('@tailwindcss/forms'), require('@tailwindcss/aspect-ratio')],

}
