<?php

//Features
add_theme_support( 'post-thumbnails' );

// Navigation Menus

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'sticky' => __('Sticky Menu'),
    'footer1' => __('Footer Menu 1'),
    'footer2' => __('Footer Menu 2')
));