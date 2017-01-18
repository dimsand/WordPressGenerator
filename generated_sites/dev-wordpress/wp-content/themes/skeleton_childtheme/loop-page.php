<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package Skeleton WordPress Theme
 * @subpackage skeleton
 * @author Simple Themes - www.simplethemes.com
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <h1><?php the_title() ?></h1>
  <div class="">
    <?php the_content() ?>
  </div>
  <div class="">
    <?php var_dump(get_bloginfo('url')) ?>
    <?php var_dump(get_bloginfo('site_title')) ?>
  </div>

<?php endwhile; // end of the loop. ?>
