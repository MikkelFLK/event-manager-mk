<?php

/**
 * Trigger this file on uninstall
 */

 // if access from outside, exit
 if(! defined('WP_UNINSTALL_PLUGIN')){
     exit;
 }

// Clear DB for plugin data
$events = get_posts( array('post_type' => 'event', 'numberposts' => -1));

// deletes each post of type, true = delete no matter post status
foreach( $events as $event){
    wp_delete_post( $event->ID, true );
}