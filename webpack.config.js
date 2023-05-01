const path = require("path");
const HtmlWebpackPlugin = require("html-webpack-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const htmlDocs=path.resolve( __dirname, "public","htdocs");

module.exports = {
  entry: {
    index: path.resolve(__dirname, "/src/scripts/index.js"),
  },
  output: {
    path: path.resolve(__dirname, "public"),
    filename: "scripts/[name].js",
  },
  module: {
    rules: [
      {
        test: /\.pug$/,
        use: [
          {
            loader: "html-loader",
            options: {
              sources: false,
            },
          },
          { loader: "pug-html-loader" },
        ],
      },
      {
        test: /\.scss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
            options: {
              emit: true,
            },
          },
          {
            loader: "css-loader",
            options: {
              url: false,
            },
          },
          { loader: "postcss-loader" },
          { loader: "sass-loader", options: { sourceMap: true } },
        ],
      },
    ],
  },
  plugins: [
    new CopyPlugin({
      patterns: [
        {
          from: path.resolve(__dirname, "src", "scripts"),
          to: path.resolve(__dirname, "public", "scripts"),
        },
        {
          from: path.resolve(__dirname, "src", ".htaccess"),
          to: path.resolve(__dirname, "public"),
        },
        {
          from: path.resolve(__dirname, "src", "auth"),
          to: path.resolve(  htmlDocs, "auth"),
        },
        {
          from: path.resolve(__dirname, "src/assets"),
          to: path.resolve(__dirname, "public/assets"),
        },
      ],
    }),
    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, "/src/pug/index.pug"),
      filename: path.resolve(  htmlDocs, "index.html"),
    }),
    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, "/src/pug/menu.pug"),
      filename: path.resolve(  htmlDocs, "menu.html"),
      minify: true,
    }),

    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, "/src/pug/about.pug"),
      filename: path.resolve(  htmlDocs, "About.html"),
      minify: true,
    }),
    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, "/src/pug/reach.pug"),
      filename: path.resolve(  htmlDocs, "reach.html"),
      minify: true,
    }),
    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, "/src/pug/contact.pug"),
      filename: path.resolve(  htmlDocs, "contact.html"),
      minify: true,
    }),
    new HtmlWebpackPlugin({
      template: path.resolve(__dirname, "/src/pug/photocredits.pug"),
      filename: path.resolve(
       htmlDocs,
        "photocredits.html"
      ),
      minify: true,
    }),
    new MiniCssExtractPlugin({
      filename: "css/stylesheet.css",
    }),
  ],
};
