<section class="bg-gray-darker">
    <div class="py-20 px-5 md:grid md:grid-rows-2 grid-cols-12 max-w-screen-xl mx-auto">
        <h2 class="text-2xl md:text-3xl my-10 text-white md:col-start-8 md:col-span-4 md:row-start-1 lg:col-start-7">Here’s a selection of our <span>recent projects.</span></h2>

        <div id="board" class="my-20 w-full relative md:col-start-2 md:col-span-5 lg:col-span-3 md:row-start-1 md:row-span-2 lg:col-start-3">
            <?php
            $array = array(
                'Fusce eleifend elementum dolor mollis euismod. Nulla nec massa eu libero aliquam tristique sed at justo. Vivamus blandit leo diam, sed placerat mi sodales quis. Phasellus pretium ipsum nec venenatis volutpat.',
                'Fusce eleifend elementum dolor mollis euismod. Nulla nec massa eu libero aliquam tristique sed at justo. Vivamus blandit leo diam, sed placerat mi sodales quis. Phasellus pretium ipsum nec venenatis volutpat.',
                'Fusce eleifend elementum dolor mollis euismod. Nulla nec massa eu libero aliquam tristique sed at justo. Vivamus blandit leo diam, sed placerat mi sodales quis. Phasellus pretium ipsum nec venenatis volutpat.',
                'Fusce eleifend elementum dolor mollis euismod. Nulla nec massa eu libero aliquam tristique sed at justo. Vivamus blandit leo diam, sed placerat mi sodales quis. Phasellus pretium ipsum nec venenatis volutpat.',
                'At eripuit signiferumque sea, vel ad mucius molestie, cu labitur iuvaret vulputate sed.',

            );
                                                            for ($k = 0; $k < 5; $k++) {

                include(locate_template('parts/elements/single/single-case-studies.php'));
            }
            ?>

        </div>
        <div class="py-5 md:col-start-8 md:row-start-2 md:col-span-full text-right"><?= ee_mph_render__btn('/', 'See all our projects'); ?></div>

    </div>
</section>
<?php wp_enqueue_script('bespokeSliderLibrary');
wp_enqueue_script('bespokeSliderController'); ?>