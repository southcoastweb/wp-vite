<?php

/**
 * Plugin Name: WP Vite
 * Plugin URI: https://southcoastweb.co.uk
 * Description: Vite support for Wordpress themes and plugins
 * Version: 0.3.1
 * Author: southcoastweb
 * Author URI: https://southcoastweb.co.uk
 * License: None
 * Text Domain: wp-vite
 *
 * @package wp-vite
 */

require_once "vendor/autoload.php";

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

$updater = PucFactory::buildUpdateChecker(
    'https://github.com/southcoastweb/wp-vite/',
    __FILE__,
    'wp-vite'
);
$updater->setBranch('main');
$updater->getVcsApi()->enableReleaseAssets('/southcoastweb-wp-vite\.zip/');
