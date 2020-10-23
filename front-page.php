<?php
/**
 * The front page template file
 *
 */

get_header(); ?>

<?php include(locate_template('parts/elements/hero-feature.php')); ?>
<?php include(locate_template('blocks/services/services.php')); ?>


<?php get_footer();
