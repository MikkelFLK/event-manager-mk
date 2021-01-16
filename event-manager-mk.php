<?php
/**
 * @package mkPlugin
 */
/*
Plugin Name: Event Manager MK
Plugin URI: http://otkaa.dk
Description: Event manager
Version: 1.0.0
Author: MK
Author URI: http://otkaa.dk
License: GPLv2 or later
Text Domain: event-manager-mk
*/

defined('ABSPATH') or exit();


if(!class_exists(dirname(__FILE__). '/vendor/autoload.php')){
  require_once dirname(__FILE__). '/vendor/autoload.php';
}

use Inc\Base\Activate;
use Inc\Base\Deactivate;

function activate_mk_plugin(){
  Activate::activate();
}

function deactivate_mk_plugin(){
  Deactivate::deactivate();
}

register_activation_hook( __FILE__, 'activate_mk_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_mk_plugin' );


if (class_exists('Inc\\Init')){
  Inc\Init::register_services();
}