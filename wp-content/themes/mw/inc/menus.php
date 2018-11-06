<?php

/**
 * Register navigation menu.
 *
 * @return void
 */
function register_menus() {
    register_nav_menu( 'header-menu', "Menu główne" );
    register_nav_menu( 'header-more', "Menu Więcej" );
}
add_action( 'after_setup_theme', 'register_menus' );
