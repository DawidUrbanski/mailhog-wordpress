<?php
/*
 * Plugin Name: Mailhog
 * Version: 1.0
 * License: GPL2
 */

add_action('phpmailer_init', function($phpmailer) {
	$phpmailer->Host = 'mailhog';
    $phpmailer->Port = 1025;
    $phpmailer->IsSMTP();
});
