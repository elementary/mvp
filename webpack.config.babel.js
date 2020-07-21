/**
 * webpack.config.babel.js
 * Builds mvp assets for use in a browser
 *
 * @exports {Object} styles - configuration object for style assets
 * @exports {Object} scripts - configuration object for script assets
 * @exports {Array} default - configuration objects for webpack
 */

import path from 'path'

import glob from 'glob'
import webpack from 'webpack'
import ManifestPlugin from 'webpack-manifest-plugin'
import TerserPlugin from 'terser-webpack-plugin'

const scriptPattern = path.resolve('_scripts', 'pages', '**', '*.js')

const browsers = [
    'last 4 version',
    'not ie <= 11'
]

const stats = {
    hash: false,
    version: false,
    timings: false,
    assets: true,
    chunks: false,
    modules: false,
    reasons: false,
    children: false,
    source: false,
    errors: true,
    errorDetails: true,
    warnings: true,
    publicPath: false
}

/*
 * Everthing past this point is plugin configuration. Do not edit unless you
 * know what you are doing.
 */

const scriptFiles = {}

glob.sync(scriptPattern).forEach((p) => {
    const name = p
    .replace(path.resolve(__dirname, '_scripts', 'pages') + path.sep, '')
    .replace('.js', '')

    scriptFiles[name] = [path.resolve(__dirname, '_scripts', 'polyfill.js'), p]
})

export default {
    devtool: 'source-map',
    entry: scriptFiles,
    output: {
        filename: '[name].[chunkhash].js',
        path: path.resolve(__dirname, 'scripts'),
        publicPath: 'scripts/'
    },
    mode: 'none',
    module: {
        rules: [{
            test: /\.js$/,
            loader: 'babel-loader',
            exclude: /node_modules/,
            query: {
                presets: [['env', {
                    modules: false,
                    targets: { browsers }
                }]]
            }
        }]
    },
    optimization: {
        splitChunks: {
            cacheGroups: {
                common: {
                    minChunks: 2,
                    chunks: 'initial',
                    name: 'common'
                }
            }
        },
        minimizer: [
            new TerserPlugin({
                terserOptions: {
                    compress: true,
                    mangle: false,
                    output: {
                        comments: false
                    },
                    sourceMap: true
                }
            })
        ]
    },
    resolve: {
        alias: {
            '~': path.resolve(__dirname, '_scripts')
        }
    },
    plugins: [
        new webpack.DefinePlugin({
            'process.env': {
                'NODE_ENV': JSON.stringify('production')
            }
        }),

        new ManifestPlugin({
            basePath: 'scripts/'
        })
    ],
    stats
}
