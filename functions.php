<?php

if(!class_exists('Framework')) die('Framework not found.');

require_once __DIR__ . '/app.php';

/**
 * Initialize
 */
$app = new App();

/**
 * Initialize theme with sensible defaults.
 */
$app->init();

/**
 * Register navigation.
 */
$app->menu('primary', 'Primary Menu');

/**
 * Enqueue scripts and styles.
 */
$app->style('css', get_stylesheet_uri());

/**
 * Register partials.
 */
$app->registerTemplatePartials($app->getTemplatePartials());

/**
 * Register helpers.
 */
$app->registerTemplateHelpers($app->getTemplateHelpers());

/**
 * Action!
 */
$app->action();

/**
 * Route!
 */
$app->route();