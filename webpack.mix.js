const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
const path = require('path')

const domain = process.env.SESSION_DOMAIN
const homedir = require('os').homedir()

// The mix script:
mix.browserSync({
    proxy: 'https://' + domain,
    host: domain,
    open: 'external',
    https: {
        key: homedir + '/.config/valet/Certificates/' + domain + '.key',
        cert: homedir + '/.config/valet/Certificates/' + domain + '.crt',
    },
})

mix.js('resources/js/app.js', 'public/js')

mix
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })

mix.version();
