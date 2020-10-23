<?php


function ee_mph_get__main_navigation(){
    $args = array(
      'menu'            => '',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'grid gap-10 grid-flow-col text-',
      'menu_id'         => '',
      'echo'            => false,
      'fallback_cb'     => 'wp_page_menu',
      'before'          => '',
      'after'           => '',
      'link_before'     => '',
      'link_after'      => '',
      'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
      'item_spacing'    => 'preserve',
      'depth'           => 0,
      'theme_location'  => 'primary-menu',
      // 'li_class'        => '',
    );
    return wp_nav_menu( $args );

}