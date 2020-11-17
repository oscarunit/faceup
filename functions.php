<?php

function faceup_theme() {
    wp_enqueue_style( 'style', get_template_directory_uri() );
  }
add_action( 'wp_enqueue_scripts', 'faceup_theme' );
