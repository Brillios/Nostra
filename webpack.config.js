const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

module.exports = {
    mode: 'production',
    entry: {
        main: './assets/js/main.js',
        styles: './assets/css/styles.css',
        bootstrap: 'bootstrap/dist/js/bootstrap.bundle.min.js',
        'bootstrap-css': 'bootstrap/dist/css/bootstrap.min.css'
    },
    output: {
        filename: (pathData) => {
            return pathData.chunk.name === 'bootstrap' ? 'assets/bootstrap/[name].min.js' : `assets/js/min.${pathData.chunk.name}.js`;
        },
        path: path.resolve(__dirname),
        publicPath: './',
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    'css-loader'
                ],
            },
        ],
    },
    optimization: {
        minimize: true,
        minimizer: [
            new TerserPlugin(),
            new CssMinimizerPlugin()
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: (pathData) => {
                return pathData.chunk.name === 'bootstrap' || pathData.chunk.name === 'bootstrap-css' ? 'assets/bootstrap/[name].min.css' : `assets/css/min.${pathData.chunk.name}.css`;
            },
        }),
    ],
};