<?php
/**
 * @package Skeleton WordPress Theme Framework
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 *
 * Layout Hooks:
 *
 * skeleton_above_header // Opening header wrapper
 * skeleton_header // header tag and logo/header text
 * skeleton_header_extras // Additional content may be added to the header
 * skeleton_below_header // Closing header wrapper
 * skeleton_navbar // main menu wrapper
 * skeleton_before_content // Opening content wrapper
 * skeleton_after_content // Closing content wrapper
 * skeleton_before_sidebar // Opening sidebar wrapper
 * skeleton_after_sidebar // Closing sidebar wrapper
 * skeleton_footer // Footer
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, skeleton_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage skeleton
 * @since skeleton 2.0
 */

function my_custom_creditlink(){
  $credits = 'Made with <span style="color:red;">&#10084;</span> by <a href="http://dimitrisandron.fr">Dimitri Sandron</a>';
  return $credits;
}
add_filter('skeleton_author_credits','my_custom_creditlink');

// On enlève l'éditeur WYSIWYG
add_action('init', 'init_remove_support',100);
function init_remove_support(){
  $user = wp_get_current_user();
  if(!in_array('administrator', (array) $user->roles)){
    $post_types = ['page', 'post'];
    foreach ($post_types as $key => $value) {
      remove_post_type_support($value, 'editor');
      remove_post_type_support($value, 'thumbnail');
      remove_post_type_support($value, 'title');
    }
  }
}

// On enlève la version de wordpress dans le code html du site
remove_action('wp_head','wp_generator');

// On enlève les messages d'erreur pour les mauvais logins de connexion
add_filter('login_errors', create_function('$a',"return 'La connexion ne peut pas se faire';"));

// For completely overriding the theme options and removal of inline styles
// You must dequeue custom.css and redeclare these styles in your child theme
//
// add_action( 'wp_enqueue_scripts', 'remove_theme_options', 11);
// function remove_theme_options() {
//     wp_dequeue_style( 'skeleton-custom' );
// }


?>
