<a href="<?=   $item['link']['url'];   ?>" class="transition-shadow duration-500 ease-in-out lg:col-start-3 my-10 rounded-2xl px-10 py-12 bg-x text-white shadow-none hover:shadow-lg" target="<?=   $item['link']['target'];   ?>">
    <h3 class=" mb-3"><?= $item['title']; ?></h3>
    <div class="flex items-center mt-8">
        <div class="flex-none">
            <img src="https://fakeimg.pl/30/">
        </div>
        <div class="ml-5 ">
            <span class="text-white"><?=   $item['link']['title'];   ?></span>
        </div>
    </div>
</a>