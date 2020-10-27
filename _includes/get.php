<?php


function ee_mph_get__main_navigation(){
    $args = array(
      'menu'            => '',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'grid gap-10 grid-flow-col',
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

function ee_mph_get__footer_navigation(){
    $args = array(
      'menu'            => '',
      'container'       => '',
      'container_class' => '',
      'container_id'    => '',
      'menu_class'      => 'md:flex py-16 md:py-20',
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
      'theme_location'  => 'footer-menu',
      'walker'          =>  new ee_mph__cust_walker()
      // 'li_class'        => '',
    );
    return wp_nav_menu( $args );

}