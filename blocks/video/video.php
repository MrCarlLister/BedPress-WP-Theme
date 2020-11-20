<?php $spacing = ee_mph_get__element_spacing(); ?>

<?php
$space = ' ' . $spacing['mb'] . ' ' . $spacing['pb'];
$bg = ee_mph_get__bg_option(get_field('bg'));
wp_enqueue_script('videoController');
?>

<!-- REMOVE  flex-row-reverse to flip order -->

<section class="<?= $bg . ' ' . $space; ?> leading-loose overflow-hidden ">

    <div class="max-w-screen-xl mx-10 lg:mx-auto lg:flex lg:items-start">


        <div class="lg:w-6/12 mx-auto markdown">
            <?= render__video(get_field('video_link'), get_field('placeholder_image')); ?>
        </div>
    </div>
</section>

<script>

</script>