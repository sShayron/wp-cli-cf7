<?php

use WP_CLI;
use WP_CLI\Process;
use WP_CLI\Utils;

class Cf7Command  extends WP_CLI_Command {

	public function create($args, $assoc_args) {
		WP_CLI::success( "Teste" );
	}
}
