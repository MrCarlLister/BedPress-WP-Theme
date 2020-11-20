<?php


function ee_mph_get__main_navigation()
{
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
  return wp_nav_menu($args);
}

function ee_mph_get__footer_navigation()
{
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
  return wp_nav_menu($args);
}

function ee_mph_get__all_services($id = null)
{

  $args = array(
    'post_type'       => 'cpt-services',
    'post__not_in'    => array($id)
  );
  return get_posts($args);
}
function ee_mph__get_true_element_pb($val)
{
  $array = array(
    'none'    => 'py-0',
    'small'   => 'py-5',
    'medium'  => 'py-10',
    'large'   => 'py-20',
  );

  return $array[$val];
}


function ee_mph__get_true_element_mb($val)
{
  $array = array(
    'none'    => 'mb-0',
    'small'   => 'mb-5',
    'medium'  => 'mb-10',
    'large'   => 'mb-20',
  );

  return $array[$val];
}


function ee_mph_get__element_spacing()
{
  $mb = get_field('multi--mb') ?? 'none';
  $pb = get_field('multi--pb') ?? 'medium';

  $pb = ee_mph__get_true_element_pb($pb);
  $mb = ee_mph__get_true_element_mb($mb);

  return array(
    'mb'  =>  $mb,
    'pb'  =>  $pb
  );
}

function ee_mph_get__bg_option($bg = '')
{

  if ($bg == 'grey') {
    $bg = 'bg-gray-lighter';
  } else if ($bg == 'white') {
    $bg = 'bg-white';
  }

  return $bg;

}