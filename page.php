<?php
/**
 * The main template file
 *
 */

get_header(); ?>

<?php include(locate_template('parts/elements/hero-general.php')); ?>

<?php the_content();?>

<?php get_footer();
