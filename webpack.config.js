module.exports = {
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