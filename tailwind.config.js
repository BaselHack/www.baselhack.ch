module.exports = {
  purge: [
    './resources/**/*.blade.php',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {},
  },
  variants: {
    extend: {
      filter: ['hover'],
    },
    animation: ['responsive', 'motion-safe', 'motion-reduce'],
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}
