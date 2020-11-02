const mix = require('laravel-mix');
const mqpacker = require("css-mqpacker");
const sortCSSmq = require('sort-css-media-queries');

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

mix.js('resources/js/app_frontend.js', 'public/js')
   .js('resources/js/app.js', 'public/js')
   .js('resources/js/lead/lead.js', 'public/js')
   .js('resources/js/quiz-site.js', 'public/js')
   .js('resources/js/quiz-promo.js', 'public/js')
   .sass('resources/sass/app_frontend.scss', 'public/css')
   .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/quiz.scss', 'public/css')
   .options({
       postCss: [
         mqpacker({
               sort: sortCSSmq
           })
       ]
   });

   // .browserSync({
   //     proxy: 'http://trend-p.loc/'
   // });

   if (mix.inProduction()) {
       mix.version();
   }
