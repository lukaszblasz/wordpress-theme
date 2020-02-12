const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const isProduction = process.env.NODE_ENV;

module.exports = {
  entry: {
    entry: __dirname + '/index.js'
  },
  output: {
    filename: 'all.js'
  },
  module: {
    rules: [
      {
        test: /\.(scss|css)$/,
        use: [
          MiniCssExtractPlugin.loader,
          'css-loader',
          'sass-loader',
        ],
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'all.css',
    }),
    (!isProduction) && new LiveReloadPlugin({
      protocol: 'http',
      appendScriptTag: true
    })
  ],
};