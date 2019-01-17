const mix = require('laravel-mix');

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
   .js('resources/assets/js/vegas.js','public/js')
   .js('resources/assets/js/custom.js','public/js')
   .styles([
     'resources/assets/css/bootstrap.css',
     'resources/assets/css/normalize.css',
     'resources/assets/css/vegas.css',
     'resources/assets/css/master.css',
   ], 'public/css/app.css')
   .options({
      processCssUrls: false
   })
   .copyDirectory('resources/assets/img', 'public/img')
   .copyDirectory('resources/assets/fonts', 'public/fonts');
