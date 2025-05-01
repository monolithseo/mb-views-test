<?php
/**
 * Plugin Name: My MB Views Templates
 * Description: Template storage for MB Views
 * Version: 1.0.0
 * Author: Your Name
 */

// Register the templates directory with MB Views
add_filter('mbv_fs_paths', function($paths) {
    $paths[] = plugin_dir_path(__FILE__) . 'templates';
    return $paths;
});

// Register the section namespace
add_action('mbv_fs_loader_init', function($fs_loader) {
    $fs_loader->addPath(plugin_dir_path(__FILE__) . 'templates/section', 'section');
});
