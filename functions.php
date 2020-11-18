<?php

function faceup_theme() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style('resetcss', get_theme_file_uri('css/reset.css'));
  wp_enqueue_style('header_style', get_theme_file_uri('css/header.css'));
  wp_enqueue_style('footer_style', get_theme_file_uri('css/footer.css'));
  wp_enqueue_style('page_style', get_theme_file_uri('css/page.css'));
}
add_action( 'wp_enqueue_scripts', 'faceup_theme' );

register_nav_menus( array(
	'main_menu' => 'Menu Principal',
) );
