<?php

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit();
}
// Delete widget settings option from options table
delete_option( 'widget_r3dfmeetup' );
