<?php

function faceup_theme() {
    wp_enqueue_style( 'style', get_template_directory_uri() );
    wp_enqueue_style('main_style', get_theme_file_uri('css/header.css'));
  }
add_action( 'wp_enqueue_scripts', 'faceup_theme' );
