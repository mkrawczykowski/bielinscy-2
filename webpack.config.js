const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CopyWebpackPlugin = require("copy-webpack-plugin");

module.exports = {
  entry: ['./src/app.js'],
  output: {
    filename: 'bundle.js',
    path: path.resolve(__dirname, 'assets'),
  },
  module: {
    rules: [
      {
        test: /\.(sa|sc|c)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              publicPath: './',
            },
          },
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.m?js$/,
        exclude: /(node_modules|bower_components)/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      },
      {
        test: /\.(png|jpe?g|gif|svg|webp)$/i,
        use: [
          {
            loader: 'file-loader',
            options: {
              name: './images/[name].[ext]',
            },
          },
        ],
      },
    ]
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "style.css",
      chunkFilename: "[name].css"
    }),
    new CopyWebpackPlugin({
      patterns: [
        // { from: "./src/images", to: "./images" },
        // { from: "./src/js/object2vr", to: "./object2vr" },
        { from: path.resolve(__dirname, "src", "images"), to: path.resolve(__dirname, "assets", "images") },
        { from: path.resolve(__dirname, "src", "js/object2vr"), to: path.resolve(__dirname, "assets", "object2vr") }
      ],
    }),
  ],
};