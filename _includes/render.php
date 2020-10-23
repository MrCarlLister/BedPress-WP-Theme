<?php


function ee_mph_render__btn($url, $text='Find out more'){
   
    return '<a href="' . $url . '" class=" inline-block text-white rounded-2xl border-x "><span class="pt-4 pb-3 px-8 inline-block">' . $text . '</span></a>';

}