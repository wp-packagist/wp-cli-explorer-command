<?php

# Check Exist WP-CLI
if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Explorer Current working directory.
 *
 * ## EXAMPLES
 *
 *      # Explorer Current working directory.
 *      $ wp explorer
 *
 * @when before_wp_load
 */
WP_CLI::add_command( 'explorer', function ( $args, $assoc_args ) {
	WP_CLI_Helper::Browser( WP_CLI_Util::getcwd() );
} );