<?php
/* Template Name: Base Template */

get_header();
do_action('skeleton_before_content');
get_template_part( 'pageContent' );
do_action('skeleton_after_content');
get_sidebar('page');
get_footer();
