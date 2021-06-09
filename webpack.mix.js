const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const domain =  process.env.SESSION_DOMAIN
const homedir = require('os').homedir();

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

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/sass/styles.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    });

mix.copy(
    'node_modules/@fortawesome/fontawesome-pro/webfonts',
    'public/webfonts'
);
