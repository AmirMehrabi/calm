const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'scripts')
    .sass('source/_assets/sass/main.scss', 'styels')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('tailwind.config.js'),
        ]
    })
    .version();