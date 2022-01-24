const mix = require("laravel-mix");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

/** Direct Import (Current) */
mix.js("resources/js/component/direct.js", "public/js").vue();

// mix.webpackConfig({
//     resolve: {
//         symlinks: false,
//     },
// });

/** Lazy Loading */
// mix.js("resources/js/component/lazyload.js", "public/js").vue();

/** Manual Injection */
// mix.js("resources/js/component/lazyload.js", "public/js").vue(); // root app
// mix.js("resources/js/component/manual/root.js", "public/js").vue(); // server module
// mix.js("resources/js/component/manual/mi_module_1.js", "public/js").vue(); // webapp
// mix.js("resources/js/component/manual/mi_module_2.js", "public/js").vue(); // webapp

// .postCss("resources/css/app.css", "public/css", [
//     //
// ]);
