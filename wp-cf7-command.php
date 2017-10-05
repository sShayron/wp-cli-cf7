<?php
if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}
$autoload = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $autoload;
}
WP_CLI::add_command( 'cf7 create', array( 'WP_CLI\Cf7Command', 'create' ) );