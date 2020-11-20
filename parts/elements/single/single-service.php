<div class="flex my-5 transition duration-500 mx-10" id="service-<?= $service->ID; ?>">
    <div class="flex-none">
        <img src="https://fakeimg.pl/50/">
    </div>
    <div class="ml-5 flex-1">
        <h5 class="text-xl mb-3 "><span><?= $service->post_title; ?></span></h5>
        <?= (!empty($service->post_excerpt)) ? '<p class="mb-3">' . $service->post_excerpt . '</p>' : ''; ?>
        <div class="block text-right"><a href="<?= get_the_permalink($service->ID); ?>" class="link-primary-gradient">Discover</a></div>
    </div>
</div>