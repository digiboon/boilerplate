<?php

/**
 * Front page.
 */
$app->isFrontPage(function() use($app) {

	// Front page.

});

/**
 * Blog page.
 */
$app->isHome(function() use($app) {

	// Blog page.

});

/**
 * Blog post page.
 */
$app->isSingle('*', function() use($app) {

	// Blog post page.

});

/**
 * Regular page.
 */
$app->isPage('*', function() use($app) {

	// Regular page.

});

/**
 * Not found page.
 */
$app->is404(function() use($app) {

	// Not found page.

});