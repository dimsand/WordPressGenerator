<?php
/*
Plugin Name: Custom CSS
Plugin URI: http://google.fr
Description: Ceci est un plugin qui permet de charger du CSS personnalisé
Version: 0.1
Author: Dimitri Sandron
Author URI: http://google.fr
License: GPL2
*/

function addCustomFiles(){
  wp_register_style('custom_style', plugin_dir_url( __FILE__ ) . '/customCss.css');
  wp_enqueue_style('custom_style');

  wp_register_script('custom_script', plugin_dir_url( __FILE__ ) . '/customJs.js', array('jquery'));
  wp_enqueue_script('custom_script');
}

add_action('wp_enqueue_scripts', 'addCustomFiles');

function modifyTitle($title){
  //return $title . '<span style="font-size:10px;font-style:italic;"> : Ceci est un titre</span>';
  return $title;
}

//add_filter('the_title', 'modifyTitle');

function createButton(){
  return "<div style='text-align:center;'><button class='button'>Voir !</button></div>";
}

add_shortcode('button', 'createButton');

function avertissementReturn($atts){
  $a = shortcode_atts(array(
    'content' => ''
  ), $atts);
  return $a['content'];
}

add_shortcode('avertissement', 'avertissementReturn');
