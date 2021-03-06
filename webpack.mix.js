let { mix } = require("laravel-mix");
let styleLintPlugin = require("stylelint-webpack-plugin");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.webpackConfig({
  plugins: [
    new styleLintPlugin({
      configFile: ".stylelintrc",
      context: "src/scss",
      files: [
        "*/.scss",
        "base/*.scss",
        "helpers/*.scss",
        "utilities/*.scss",
        "components/*.scss"
      ],
      syntax: "scss",
      failOnError: false,
      quiet: false
    })
  ]
});

mix
  // .pug("src/views/*.pug", "build/")
  .js("src/js/app.js", "wp-content/themes/es/library/js/")
  .sass("src/scss/app.scss", "wp-content/themes/es/library/css/")
  .browserSync({
    proxy: "192.168.33.10",
    files: [
      // "wp-content/themes/es/views/",
      "wp-content/themes/es/library/css/app.css",
      "wp-content/themes/es/library/js/app.js"
    ]
  })
  .options({
    processCssUrls: false,
    postCss: [require("cssnano")()]
  });

