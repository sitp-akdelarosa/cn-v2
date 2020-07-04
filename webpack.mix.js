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

// mix.js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
mix.styles([
        'public/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'public/assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'public/assets/global/plugins/uniform/css/uniform.default.css',
        'public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'public/assets/global/plugins/datatables/datatables.min.css',
        'public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css',
        'public/assets/global/css/components-md.min.css',
        'public/assets/global/css/plugins-md.min.css',
        'public/assets/layouts/layout/css/layout.min.css',
        'public/assets/layouts/layout/css/themes/darkblue.css',
        'resources/css/custom.css',
    ], 'public/css/app.css')

    .scripts([
        'public/assets/global/plugins/jquery.min.js',
        'public/assets/global/plugins/bootstrap/js/bootstrap.min.js',
        'public/assets/global/plugins/js.cookie.min.js',
        'public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'public/assets/global/plugins/jquery.blockui.min.js',
        'public/assets/global/plugins/uniform/jquery.uniform.min.js',
        'public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'public/assets/global/scripts/datatable.js',
        'public/assets/global/plugins/datatables/datatables.min.js',
        'public/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js',
        'public/assets/global/scripts/app.js',
        'public/assets/layouts/layout/scripts/layout.js',
        'public/assets/layouts/layout/scripts/demo.js',
    ], 'public/js/app.js')

    // Login Page
    .styles([
        'public/assets/global/plugins/font-awesome/css/font-awesome.min.css',
        'public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
        'public/assets/global/plugins/bootstrap/css/bootstrap.min.css',
        'public/assets/global/plugins/uniform/css/uniform.default.css',
        'public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
        'public/assets/global/plugins/select2/css/select2.min.css',
        'public/assets/global/plugins/select2/css/select2-bootstrap.min.css',
        'public/assets/global/css/components-md.min.css',
        'public/assets/global/css/plugins-md.min.css',
        'resources/css/custom.css',
        'resources/pages/login/login.min.css',
    ], 'public/pages/login/login.css')

    .scripts([
        'public/assets/global/plugins/jquery.min.js',
        'public/assets/global/plugins/bootstrap/js/bootstrap.min.js',
        'public/assets/global/plugins/js.cookie.min.js',
        'public/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js',
        'public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
        'public/assets/global/plugins/jquery.blockui.min.js',
        'public/assets/global/plugins/uniform/jquery.uniform.min.js',
        'public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
        'public/assets/global/plugins/jquery-validation/js/jquery.validate.min.js',
        'public/assets/global/plugins/jquery-validation/js/additional-methods.min.js',
        'public/assets/global/plugins/select2/js/select2.full.min.js',
        'public/assets/global/scripts/app.min.js',
        'resources/pages/login/login.min.js',
    ], 'public/pages/login/login.js')

    // Home Page
    .styles([
        'resources/pages/home/home.css',
    ], 'public/pages/home/home.css')

    .scripts([
        'resources/pages/home/home.js',
    ], 'public/pages/home/home.js')

    // WBS Material Receiving Page
    .styles([
        'resources/pages/wbs/material-receiving.css',
    ], 'public/pages/wbs/material-receiving.css')

    .scripts([
        'resources/pages/wbs/material-receiving.js',
    ], 'public/pages/wbs/material-receiving.js');

