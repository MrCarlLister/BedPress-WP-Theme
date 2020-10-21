<?php

//
// ─── THEME STUFF ────────────────────────────────────────────────────────────────
//

add_filter( 'woocommerce_get_item_data', 'wc_checkout_description_so_15127954', 10, 2 );
function wc_checkout_description_so_15127954( $other_data, $cart_item )
{
    $post_data = get_post( $cart_item['product_id'] );
    
    $other_data[] = array( 'name' =>  $post_data->post_excerpt );

    
    return $other_data;
}


//
// ─── ALL EE WOOCOMMERCE ACTIONS ───────────────────────────────────────────
//

    
//
// ────────────────────────────────────────────────── I ──────────
//   :::::: S E T U P : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────
//

function ee__woocommerce_setup(){
    add_action( 'ee__continue_shopping', 'display_continue_shopping_html', 1 );
}

add_action('woocommerce_init', 'ee__woocommerce_setup');


//
// ──────────────────────────────────────────────────────── I ──────────
//   :::::: T H E   R E S T : :  :   :    :     :        :          :
// ──────────────────────────────────────────────────────────────────
//




function ee__woo_create_page_option( $settings ) {

    $updated_settings = array();
  
    foreach ( $settings as $section ) {
  
      // at the bottom of the General Options section
      if ( isset( $section['id'] ) && 'advanced_page_options' == $section['id'] &&
         isset( $section['type'] ) && 'sectionend' == $section['type'] ) {
  
        $updated_settings[] = array(
            'title'    => __( 'Page', 'woocommerce' ),
            'desc'     => __( 'Page for the page.', 'woocommerce' ),
            'id'       => 'woocommerce_page-name_page_id',
            'default'  => '',
            'class'    => 'wc-enhanced-select-nostd',
            'css'      => 'min-width:300px;',
            'type'     => 'single_select_page',
            'args'     => array( 'exclude' => wc_get_page_id( 'checkout' ) ),
            'desc_tip' => true,
            'autoload' => false,
        );
      }
  
      $updated_settings[] = $section;
    }
  
    return $updated_settings;
  }
  add_filter( 'woocommerce_settings_pages', 'ee__woo_create_page_option' );
  
  
  // GET NEW PAGE LINK
  function wc__get_page_name_url()
  {
      return get_the_permalink(get_option('woocommerce_page-name_page_id',1));
  }
  

//
// ────────────────────────────────────────────────────────────────────────────── II ──────────
//   :::::: S I N G L E   P R O D U C T   P A G E : :  :   :    :     :        :          :
// ────────────────────────────────────────────────────────────────────────────────────────
//

?>
