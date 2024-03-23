<?php

class MapPanameEmployment {
    static public function activation() {

    }

    static public function deactivation() {

    }

    static public function init() {
        add_shortcode( 'map_panama_empleos', [ __CLASS__, 'app_map' ] );
    }

    static public function app_map($attrs) {
        $width = $attrs['width'] ?? '600px';
        $height = $attrs['height'] ?? '400px';
        include_once WP_PLUGIN_DIR . '/map-panama-empleos/templates/app.php';
    }
}