<?php
/**
 * @package mkPlugin
 */

namespace Inc\Base;

 class Activate{
     
    public static function activate()
    {
        flush_rewrite_rules();

        if(get_option( 'event_manager_mk' )){
            return;

            $default = array();

            update_option( 'event_manager_mk', $default );
        }
    }
 }