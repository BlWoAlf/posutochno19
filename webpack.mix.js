let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
      'public/css/vendor/brands.css',
      'public/css/vendor/solid.css',
      'public/css/vendor/regular.css',
      'public/css/vendor/fontawesome.css',
      'public/css/vendor/owl.carousel.css',
      'public/css/vendor/owl.theme.default.css'
], 'public/css/tools.css');

mix.scripts([
   'public/js/app.js',
   'public/js/owl.carousel.js',
   'public/js/main.js'
], 'public/js/all.js');
