<?php
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/**
* @package Resultate-Create-CF7-WP-CLI
* Plugin Name: Resultate Create Contact Form 7 WP CLI
* Description: Este plugin funciona como uma extensão para o WP-CLI para criar formulários do Contact Form 7 via linha de comando
* Version: 0.0.1
* Author: Resultate
* Author URI: http://www.resultate.com.br
*/

use WP_CLI;
$autoload = dirname( __FILE__ ) . '/vendor/autoload.php';
if ( file_exists( $autoload ) ) {
	require_once $autoload;
}

class Cf7Command  extends WP_CLI_Command {

	public function create($args, $assoc_args) {
		WP_CLI::success( "Teste" );
	}
}

WP_CLI::add_command( 'test', 'Cf7Command' );