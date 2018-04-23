<?php

/* 
Plugin Name: Northbuzz Widget
 */

 if(!defined('ABSPATH')){
     exit;
 }

 // Load Scripts
 require_once(plugin_dir_path(__FILE__).'/includes/northbuzz-widget-scripts.php');


 function nb_widget_full_width_pic($atts){
     $a = shortcode_atts(array(
         'src' => '',
     ), $atts);

     return "</div></div><div class='row '><div class='col px-0'><img src='".$a['src']."' class='img-fluid'/></div></div><div class='row'><div class='col'>";
 }

 add_shortcode('nb_pic_full_width', 'nb_widget_full_width_pic');