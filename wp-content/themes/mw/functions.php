<?php


update_option('medium_large_size_w', 138);
update_option('medium_large_size_h', 138);
update_option('medium_large_crop', 0);

update_option('large_size_w', 138);
update_option('large_size_h', 138);
update_option('large_crop', 0);

update_option('medium_size_w', 138);
update_option('medium_size_h', 138);
update_option('medium_crop', 0);


add_image_size( 'i_small', 160, 90 );
add_image_size( 'i_medium', 238, 134 );
add_image_size( 'i_large', 495, 278 );
add_image_size( 'i_huge', 640, 360 );

add_theme_support( 'post-thumbnails' );


add_action( 'init', 'custom_page_rules' );

function custom_page_rules() {
  global $wp_rewrite;
  $wp_rewrite->page_structure = $wp_rewrite->root . 's/%pagename%'; 
}

// Frontend origin
require_once 'inc/frontend-origin.php';

// ACF commands
require_once 'inc/class-acf-commands.php';

// Logging functions
require_once 'inc/log.php';

// CORS handling
require_once 'inc/cors.php';

// Admin modifications
require_once 'inc/admin.php';

// Add Menus
require_once 'inc/menus.php';

// Add Headless Settings area
require_once 'inc/acf-options.php';

// Add custom API endpoints
require_once 'inc/api-routes.php';



