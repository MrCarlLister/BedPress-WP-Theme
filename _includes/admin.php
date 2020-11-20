<?php


//
// ────────────────────────────────────────────────── I ──────────
//   :::::: M M E N U : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────
//

function ee__mm_menu()
{

    // NOTE: Wrap trigger element with class `Fixed` to break out of mm-page to allow over slideout

echo '<nav id="the-mmmenu">';
        $args = array(
          'menu'            => 'nav',
					'container'       => 'div',
            'container_class'      => 'container',
            'menu_class'      => 'row',
            'theme_location'  => 'primary-menu'
        );

        wp_nav_menu($args);
echo'</nav>';


}

add_action( 'wp_footer', 'ee__mm_menu' );



//
// ────────────────────────────────────────────────────────── I ──────────
//   :::::: T E M P O R A R Y : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────
//

// function hide_admin_bar(){ return false; }
// add_filter( 'show_admin_bar', 'hide_admin_bar' );


//
// ──────────────────────────────────────────────────── I ──────────
//   :::::: E M A I L S : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────
//

function ee__email_header()
{
  $header = '';

  return $header;
}

function ee__email_footer()
{
  $footer = '';

  return $footer;
}

function ee__email_customer($data)
{
  $html = '';

  return $html;
}

function ee__email_client($data)
{
  $html = '';

  return $html;
}


//------------------------------------------------
// Admin CSS
//------------------------------------------------

add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts()
{
  echo
    '<style>
    .wp-block {max-width: 1200px;}
    #editor .editor-styles-wrapper{font-family: Raleway,Lato,Lucida Grande,Tahoma,Sans-Serif;
  </style>';
}