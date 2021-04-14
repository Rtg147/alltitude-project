let mix = require('laravel-mix');
let productionSourceMaps = false;

require('laravel-mix-tailwind');

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

mix
    .sourceMaps(productionSourceMaps, 'source-map')
    .webpackConfig({
        devtool: 'inline-source-map'
    })
	.js('resources/js/app.js', 'public/js')
	.vue()
    .tailwind();
