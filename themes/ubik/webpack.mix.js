/*
 * Theme uses Laravel Mix
 */

let mix = require( 'laravel-mix' );

/* ===== Development ===== */

/* 
// Compile assets
mix.sass( 'assets/src/scss/foundation.min.scss', 'assets/css' )
	.sass( 'assets/src/scss/style.min.scss', 'assets/css' )
  .sass( 'assets/src/scss/editor-style.min.scss', 'assets/css' );

// Compile scripts
mix.scripts([
  'assets/src/scripts/foundation-init.js',
  'assets/src/scripts/scroll-top.js'
], 'assets/js/all.min.js');

mix.sourceMaps();

 */

/* ===== Production ===== */


////
/// npm run dev => refresh unminified files
////
/* 
// Compile assets
mix.sass( 'assets/src/scss/foundation.min.scss', 'assets/css/foundation.css' )
	.sass( 'assets/src/scss/style.min.scss', 'assets/css/style.css' )
  .sass( 'assets/src/scss/editor-style.min.scss', 'assets/css/editor-style.css' );

// Compile scripts
mix.scripts([
  'assets/src/scripts/foundation-init.js',
  'assets/src/scripts/scroll-top.js'
], 'assets/js/all.js');

mix.sourceMaps();

 */

////
/// npm run prod => refresh unminified files
////
/* 
// Compile assets
mix.sass( 'assets/src/scss/foundation.min.scss', 'assets/css' )
	.sass( 'assets/src/scss/style.min.scss', 'assets/css' )
  .sass( 'assets/src/scss/editor-style.min.scss', 'assets/css' );

// Compile scripts
mix.scripts([
  'assets/src/scripts/foundation-init.js',
  'assets/src/scripts/scroll-top.js'
], 'assets/js/all.min.js');

mix.sourceMaps();

 */