<?php
/**
 * The front page template file
 *
 */

get_header(); ?>

<?php include(locate_template('parts/elements/hero-feature.php')); ?>

<?php the_content();?>

<?php get_footer();
