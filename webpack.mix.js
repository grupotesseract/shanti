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
   .js('resources/assets/js/home.js', 'public/js')
   .js('resources/assets/js/blocos_descricao.js', 'public/js')
   .copy('resources/assets/js/summernote.js', 'public/summernote/summernote-custom.js')
   .sass('resources/assets/sass/_blocosConteudo.scss', 'public/css')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/home.scss', 'public/css');
