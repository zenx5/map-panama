<?php
/**
*   Plugin Name: Map Panama Empleos
*   Plugin URI: https://github.com/zenx5/map-hover
*   Description: Plugin para mostrar el mapa de empleos en Panama
*   Version: 1.0
*   Author: Zenx5
*   Author URI: https://github.com/zenx5
*   License: GPL2
*/
require WP_PLUGIN_DIR . '/map-panama-empleos/classes/class-map-panama.php';
$nameClass = 'MapPanameEmployment';

register_activation_hook( __FILE__, [$nameClass, 'activation'] );
register_activation_hook( __FILE__, [$nameClass, 'deactivation'] );

add_action( 'init', [$nameClass, 'init'] );