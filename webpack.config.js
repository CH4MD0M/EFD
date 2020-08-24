const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");

module.exports = {
  // entry files
  entry: ["@babel/polyfill", "./src/js/index.js", "./src/sass/main.scss"],

  // 컴파일 + 번들링된 js 파일이 저장될 경로와 이름 지정
  output: {
    path: path.resolve(__dirname, "dist"),
    filename: "js/bundle.js",
  },

  module: {
    rules: [
      {
        test: /\.js/,
        include: [path.resolve(__dirname, "src/js")],
        use: {
          loader: "babel-loader",
          options: {
            presets: ["@babel/preset-env"],
          },
        },
      },

      {
        test: /\.scss/,
        use: [
          MiniCssExtractPlugin.loader,
          "css-loader", // translates CSS into CommonJS
          "sass-loader", // compiles Sass to CSS, using Node Sass by default
        ],
      },

      {
        test: /\.png$/,
        use: [
          {
            loader: "file-loader",
            options: {
              publicPath: "../dist",
            },
          },
        ],
      },
    ],
  },

  plugins: [
    new HtmlWebpackPlugin({
      template: "src/index.html",
      filename: "index.html",
    }),

    // 컴파일 + 번들링 CSS 파일이 저장될 경로와 이름 지정
    new MiniCssExtractPlugin({
      filename: "css/style.css",
    }),
  ],

  devServer: {
    contentBase: "./dist",
  },
};
