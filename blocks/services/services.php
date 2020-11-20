<?php

$title = get_field('title');
$services = (get_field('show_all_handpick') == 'handpick') ? get_field('pick_services') : ee_mph_get__all_services();

// dd($services);
?>

<section class="my-40 px-5 grid lg:grid-cols-3 lg:px-20 lg:gap-x-10 max-w-screen-xl mx-auto">
    <h2 class="text-2xl md:text-3xl lg:col-span-2 lg:row-start-2 lg:text-right mb-10"><?= $title; ?></h2>

    <?php
    foreach ($services as $service) :

        include(locate_template('parts/elements/single/single-service.php'));
    endforeach;

    ee_mph_render__cta_panel();
    
    ?>
</section>