<?php $spacing = ee_mph_get__element_spacing(); ?>

<div class="relative bg-gradient-red-to-blue">

    <div class="w-11/12 sm:w-3/5  bg-black h-full px-5 py-20 sm:px-10 md:px-20 md:py-32 lg:py-48">
        <h2 class="text-white mb-6 max-w-lg">Want to start a project</h2>
        <p class="text-white mb-6">Give us some details and we’ll be in touch soon!</p>
        <form class="mx-5 sm:mx-auto sm:mt-16 sm:max-w-lg">
            <fieldset class="mb-10">
                <?= ee_mph_render__label('Name', 'project-name'); ?>
                <?= ee_mph_render__input('text', 'project-name', 'Your Name'); ?>
            </fieldset>

            <fieldset class="mb-10">
                <?= ee_mph_render__label('Telephone', 'project-telephone'); ?>
                <?= ee_mph_render__input('tel', 'project-telephone', '0191 222 11 22'); ?>
            </fieldset>

            <fieldset class="mb-10">
                <?= ee_mph_render__label('Email', 'project-email'); ?>
                <?= ee_mph_render__input('email', 'project-email', 'email@me.com'); ?>
            </fieldset>

            <fieldset class="mb-10">
                <?= ee_mph_render__label('Project details', 'project-message'); ?>
                <?= ee_mph_render__textarea('project-message', false); ?>
            </fieldset>
            <fieldset class="text-right">
                <?= ee_mph_render__submit(); ?>
                <p class="text-sm mt-2"><span class="text-white">or call</span> <a href="tel:01916918799" class="bg-clip-text text-red">+44 (0)191 691 8799</a></p>
            </fieldset>

        </form>
    </div>
</div>