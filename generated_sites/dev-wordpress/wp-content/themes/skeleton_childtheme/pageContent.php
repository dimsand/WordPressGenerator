<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

    <?php var_dump(get_fields()) ?>
    <div class="post-custom">
      <h1><?php echo get_field('contact_titre') ?></h1>
      <div><?php echo get_field('contact_contenu') ?></div>
    </div>

<?php endwhile; // end of the loop. ?>
