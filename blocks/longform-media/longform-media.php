<?php $spacing = ee_mph_get__element_spacing(); ?>

<?php

$has_media = get_field('inc_media') ?? 'none';
$class = ($has_media == 'none') ? 'lg:w-6/12 mx-auto' : 'lg:w-5/12';
$order = (get_field('align') == 'right') ? 'flex-row-reverse' : '';
$space = ' ' . $spacing['mb'] . ' ' . $spacing['pb'];
$bg = ee_mph_get__bg_option(get_field('bg'));

?>

<!-- REMOVE  flex-row-reverse to flip order -->

<section class="<?= $bg . ' ' . $space; ?> leading-loose overflow-hidden ">

    <div class="max-w-screen-xl mx-10 lg:mx-auto lg:flex lg:items-start <?= $order; ?>">

        <?php render__text_media($has_media, get_field('align')); ?>

        <div class="<?= $class; ?> markdown">
            <?= get_field('wysiwyg'); ?>
        </div>
    </div>
</section>