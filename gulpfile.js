var elixir = require('laravel-elixir');
var publicJsPath = 'public/js';
var webpackConfig = {
    babel: {
        // enable stage 0 babel transforms.
        presets: ['es2015'],
        plugins: ['transform-runtime'],
    },
    module: {
        loaders: [
            {
                test: /\.vue$/, // a regex for matching all files that end in `.vue`
                loader: 'vue'   // loader to use for matched files
            },
            {
                // use babel-loader for *.js files
                test: /\.js$/,
                loader: 'babel',
                // important: exclude files in node_modules
                // otherwise it's going to be really slow!
                exclude: /node_modules/,
            },
        ],
    },
};

require('laravel-elixir-webpack');

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
    mix.webpack('vue/simple_example.js', {}, publicJsPath + '/vue/simple_example.js');
    mix.webpack('vue/render_list.js', {}, publicJsPath + '/vue/render_list.js');
    mix.webpack('vue/condition.js', {}, publicJsPath + '/vue/condition.js');
    mix.webpack('vue/handle_event.js', {}, publicJsPath + '/vue/handle_event.js');
    mix.webpack('vue/filter.js', {}, publicJsPath + '/vue/filter.js');
    mix.webpack('vue/computed.js', {}, publicJsPath + '/vue/computed.js');
    mix.webpack('vue/computed_setter.js', {}, publicJsPath + '/vue/computed_setter.js');
    mix.webpack('vue/style_binding.js', {}, publicJsPath + '/vue/style_binding.js');
    mix.webpack('vue/component.js', {}, publicJsPath + '/vue/component.js');
    mix.webpack('vue/modularization.js', webpackConfig, publicJsPath + '/vue/modularization.js');
    mix.sass('app.scss');
});
