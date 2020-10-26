<?php


function ee_mph_render__btn($url, $text='Find out more'){
   
    return '<a href="' . $url . '" class=" inline-block text-white rounded-2xl border-x w-full sm:w-auto text-center sm:text-left"><span class="pt-4 pb-3 px-8 inline-block">' . $text . '</span></a>';

}

function ee_mph_render__tags()
{
    return '<span>Law</span> / <span>Health</span> / <span>Tech</span> / <span>Webcasting</span>';
}