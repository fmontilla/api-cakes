const mix = require('laravel-mix');

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

mix.setPublicPath("./public")
    // .js([
    //     'resources/js/main.js'
    // ], 'public/js')
    .copyDirectory('resources/img', 'public/img')
    .copyDirectory('resources/css', 'public/css')
    .copyDirectory('resources/js', 'public/js');
