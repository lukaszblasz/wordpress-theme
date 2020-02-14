const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const LiveReloadPlugin = require('webpack-livereload-plugin');
const isProduction = process.env.NODE_ENV;

module.exports = {
  entry: {
    all: __dirname + '/index.ts',
    editor: __dirname + '/styles/editor/editor.scss'
  },
  output: {
    filename: '[name].js'
  },
  resolve: {
    extensions: ['.ts', '.tsx', '.js'],
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
      {
        test: /\.ts?$/,
        use: 'ts-loader',
        exclude: /node_modules/,
      },
    ],
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: '[name].css',
    }),
    (!isProduction) && new LiveReloadPlugin({
      protocol: 'http',
      appendScriptTag: true
    }),
  ],
};