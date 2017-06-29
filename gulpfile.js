
var elixir = require('laravel-elixir');


elixir(function(mix){

  mix.less([
    '../css/bootstrap.css',
    '../css/font-awesome.css',
    'app.less'
  ],'public/assets/css/image.css');

  mix.scripts([
    'jquery-3.2.1.js',
    'bootstrap.js',
    'image-app.js'
  ],'public/assets/js/image.js');


    mix.copy('resources/assets/fonts','public/assets/fonts');

});
