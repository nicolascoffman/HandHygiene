var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

 /*
  |----------------------------------------------------------------
  | Have a Drink!
  |----------------------------------------------------------------
  |
  | Elixir provides a clean, fluent API for defining some basic
  | Gulp tasks for your Laravel application. Elixir supports
  | several common CSS, JavaScript and even testing tools!
  |
  */

 var paths = {
 	'jquery': './vendor/bower_components/jquery/',
 	'bootstrap': './vendor/bower_components/bootstrap-sass/assets/'
 }

 elixir(function(mix) {
     mix.sass("app.scss", 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/']})
         .copy(paths.bootstrap + 'fonts/bootstrap/**', 'public/fonts')
         .scripts([
             paths.jquery + "dist/jquery.js",
             paths.bootstrap + "javascripts/bootstrap.js"
         ], 'public/js/app.js', './');
 });
