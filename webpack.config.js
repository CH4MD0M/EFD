const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");

module.exports = {
  entry: ["@babel/polyfill", "./src/js/index.js"],

  output: {
    path: path.resolve(__dirname, "dist/js"),
    filename: "bundle.js",
  },

  plugins: [
    new HtmlWebpackPlugin({
      filename: "index.html",
      template: "./src/index.html",
    }),
  ],

  module: {
    rules: [
      {
        test: /\.js/,
        include: [path.resolve(__dirname, "src/js")],
        exclude: /node_modules/,
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },
    ],
  },

  devServer: {
    contentBase: "./dist",
  },
};
