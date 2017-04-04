<?php 

if (!defined('FW')) {
    die('Forbidden');
}

// find the uri to the shortcode folder
$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/my-shortcode');
wp_enqueue_style(
    'fw-shortcode-demo-shortcode',
    $uri . '/static/css/styles.css'
);
wp_enqueue_script(
    'fw-shortcode-demo-shortcode',
    $uri . '/static/js/scripts.js'
);