var elixir = require('laravel-elixir');
var publicJsPath = 'public/js';

require('laravel-elixir-webpack');
require('laravel-elixir-vueify');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
	mix.webpack('vue/demo_one.js', {}, publicJsPath + '/vue/demo_one.js');
	mix.webpack('vue/demo_two.js', {}, publicJsPath + '/vue/demo_two.js');
    mix.sass('app.scss');
});
