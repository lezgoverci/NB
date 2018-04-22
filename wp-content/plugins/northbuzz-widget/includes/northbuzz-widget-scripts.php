<?php

function nb_widget_add_scripts(){
    wp_enqueue_style('nb-main-style', plugins_url(). '/northbuzz-widget/css/style.css');
    wp_enqueue_script('nb-main-script', plugins_url(). '/northbuzz-widget/js/main.js');
}

add_action('wp_enqueue_scripts', 'nb_widget_add_scripts');