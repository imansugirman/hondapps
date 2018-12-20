const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');

// Bootstrap 3

mix.copy('node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css', 'public/themes/rocker/css/bootstrap.min.css');
mix.copyDirectory('node_modules/admin-lte/bower_components/bootstrap/dist/fonts/*', 'public/themes/rocker/fonts');
mix.copy('node_modules/admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js', 'public/themes/rocker/js/bootstrap.min.js');

// Font Awesome

mix.copy('node_modules/admin-lte/bower_components/font-awesome/css/font-awesome.min.css', 'public/themes/rocker/css/font-awesome.min.css');
mix.copyDirectory('node_modules/admin-lte/bower_components/font-awesome/fonts/*', 'public/themes/rocker/fonts');

// Ionicons
mix.copy('node_modules/admin-lte/bower_components/ionicons/css/ionicons.min.css', 'public/themes/rocker/css/ionicons.min.css');
mix.copyDirectory('node_modules/admin-lte/bower_components/ionicons/fonts/*', 'public/themes/rocker/fonts');

// Admin LTE
mix.copy('node_modules/admin-lte/dist/css/AdminLTE.min.css', 'public/themes/rocker/css/admin.min.css');
mix.copy('node_modules/admin-lte/dist/css/skins/_all-skins.min.css', 'public/themes/rocker/css/skins.min.css');
mix.copy('node_modules/admin-lte/dist/js/adminlte.js', 'public/themes/rocker/js/adminlte.js');

// Pace JS
mix.copy('node_modules/admin-lte/plugins/pace/pace.min.css', 'public/themes/rocker/css/pace.min.css');
mix.copy('node_modules/admin-lte/plugins/pace/pace.min.js', 'public/themes/rocker/js/pace.min.js');

// Notify
mix.copy('public/vendor/backpack/pnotify/pnotify.custom.min.css', 'public/themes/rocker/css/pnotify.custom.min.css');

// Backpack Group
mix.styles('resources/css/backpack.base.css', 'public/themes/rocker/css/backpack.base.css');
mix.styles('resources/css/backpack.bold.css', 'public/themes/rocker/css/backpack.bold.css');

// Jquery
mix.copy('node_modules/admin-lte/bower_components/jquery/dist/jquery.min.js', 'public/themes/rocker/js/jquery.min.js');
mix.copy('node_modules/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js', 'public/themes/rocker/js/jquery.slimscroll.min.js');

// Datatables Css
mix.copy('node_modules/datatables.net-bs/css/dataTables.bootstrap.min.css', 'public/themes/rocker/css/dataTables.bootstrap.min.css');
mix.copy('node_modules/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css', 'public/themes/rocker/css/fixheader.bootstrap.min.css');
mix.copy('node_modules/datatables.net-responsive-bs/css/responsive.bootstrap.min.css', 'public/themes/rocker/css/responsive.bootstrap.min.css');

// Datatables Scripts
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/themes/rocker/js/jquery.dataTables.min.js');
mix.copy('node_modules/datatables.net-bs/js/dataTables.bootstrap.min.js', 'public/themes/rocker/js/dataTables.bootstrap.min.js');
mix.copy('node_modules/datatables.net-responsive/js/dataTables.responsive.min.js', 'public/themes/rocker/js/dataTables.responsive.min.js');

mix.copy('node_modules/datatables.net-responsive-bs/js/responsive.bootstrap.min.js', 'public/themes/rocker/js/responsive.bootstrap.min.js');

mix.copy('node_modules/datatables.net-fixedheader-bs/js/fixedHeader.bootstrap.min.js', 'public/themes/rocker/js/fixedheader.bootstrap.min.js');

mix.copy('node_modules/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js', 'public/themes/rocker/js/dataTables.fixedHeader.min.js');

// Select 2
mix.copy('node_modules/admin-lte/bower_components/select2/dist/js/select2.min.js', 'public/themes/rocker/js/select2.min.js');

mix.copy('node_modules/admin-lte/bower_components/select2/dist/css/select2.min.css', 'public/themes/rocker/css/select2.min.css');

mix.copy('node_modules/select2-bootstrap-theme/dist/select2-bootstrap.min.css', 'public/themes/rocker/css/select2-bootstrap.min.css');


// Custom CSS Field
mix.styles('resources/css/custom.css', 'public/themes/rocker/css/custom.min.css');

// Front End
mix.copyDirectory('resources/fonts/*', 'public/themes/rocker/fonts');
