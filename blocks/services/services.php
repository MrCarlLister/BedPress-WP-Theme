<section class="my-40 px-5 grid lg:grid-cols-3 lg:px-20 lg:gap-x-40 max-w-screen-xl mx-auto">
    <h2 class="text-2xl md:text-3xl lg:col-span-2 lg:row-start-2 lg:text-right mb-10"><span>Hosting an event, looking for a production manager, </span>or more?</h2>

    <?php
    for ($k = 0 ; $k <5; $k++){
    
        include(locate_template('parts/elements/single/single-service.php')); 
    }

    include(locate_template('parts/elements/cta-panel.php'));
    ?>
</section>
