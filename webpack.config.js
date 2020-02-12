const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');


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
  ],
  devServer: {
    contentBase: path.join(__dirname, './'),
    compress: true,
    hot: true,
    port: 9000
  }
};