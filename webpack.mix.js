let mix = require('laravel-mix');

mix.js('src/scripts/app.js', 'dist')
.sass('src/styles/app.scss', 'dist')
.setPublicPath('dist');