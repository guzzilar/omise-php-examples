<?php
defined('BASE_PATH')     || define('BASE_PATH', __DIR__);
defined('CORE_PATH')     || define('CORE_PATH', BASE_PATH . '/core');
defined('TEMPLATE_PATH') || define('TEMPLATE_PATH', BASE_PATH . '/template');

require_once CORE_PATH . '/Template.php';
require_once CORE_PATH . '/Url.php';
require_once CORE_PATH . '/helper.php';

if (file_exists(BASE_PATH . '/omise-php/lib/Omise.php')) {
	// Manual install.
	require_once BASE_PATH . '/omise-php/lib/Omise.php';
} else if (file_exists(BASE_PATH . '/vendor/omise/omise-php/lib/Omise.php')) {
	// Composer install.
	require_once BASE_PATH . '/vendor/omise/omise-php/lib/Omise.php';
}

require_once BASE_PATH . '/_config.php';
