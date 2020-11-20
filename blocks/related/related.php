<?php
$id = null;

if (get_post_type() == 'cpt-services')
    $id = get_the_ID();

$services = ee_mph_get__all_services($id);

// dd($services);
?>

<div class="bg-white py-20 md:py-32 md:px-10">

    <div class="px-10 md:px-0">
        <h2 class="text-2xl md:text-3xl text-black mb-6 mx-auto md:max-w-screen-lg">Not sure if a Many-to-many project is for you?</h2>
    </div>
    <div class="carousel-contain">

        <div class="carousel py-10 md:pl-20 md:py-20">
            <?php
            foreach ($services as $service) {

                include(locate_template('parts/elements/single/single-service.php'));
            }

            ?>
        </div>
        <div class="flex justify-end max-w-screen-xl md:mx-10">
            <button aria-label="Previous" class="carousel-prev bg-black text-white w-10 h-10 block rounded-lg focus:outline-none">
                <</button> <button aria-label="Next" class="carousel-next bg-black text-white ml-2 w-10 h-10 block rounded-lg focus:outline-none">>
            </button>
        </div>
    </div>
</div>
<?php
wp_enqueue_script('carouselLibrary');
wp_enqueue_script('carouselController');
wp_enqueue_style('carouselStyle');
?>