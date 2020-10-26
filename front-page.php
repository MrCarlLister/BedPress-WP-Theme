<?php
/**
 * The front page template file
 *
 */

get_header(); ?>

<?php include(locate_template('parts/elements/hero-feature.php')); ?>
<?php include(locate_template('blocks/services/services.php')); ?>
<?php include(locate_template('blocks/case-studies/case-studies.php')); ?>
<?php include(locate_template('blocks/promo/promo.php')); ?>


<?php get_footer();
