<?php

// Déclarer style.css à la racine du thème
wp_enqueue_style(
    'capitaine',
    get_stylesheet_uri(),
    array(),
    '1.0'
);

// Déclarer un autre fichier CSS
wp_enqueue_style(
    'capitaine',
    get_template_directory_uri() . '/css/header.css',
    array(),
    '1.0'
);

?>
