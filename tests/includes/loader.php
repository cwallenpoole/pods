<?php

// Install Pods
$config_file_path = getenv( 'WP_TESTS_DIR') . '/wp-tests-config.php';
$multisite = (int) ( defined( 'WP_TESTS_MULTISITE') && WP_TESTS_MULTISITE );
system( WP_PHP_BINARY . ' ' . escapeshellarg( dirname( __FILE__ ) . '/install.php' ) . ' ' . escapeshellarg( $config_file_path ) . ' ' . $multisite );

// Bootstrap Pods
require dirname( __FILE__ ) . '/../../init.php';

// Load Die Handler
$die_handler = dirname( __FILE__ ) . '/die-handler.php';

require_once $die_handler;

new Pods_Die_Handler;