<?php
	
	//
	// ─── ADD MENUS TO THEME ─────────────────────────────────────────────────────────
	//
		
	add_theme_support( 'menus' );

	function register_theme_menus() {

		// Specify Menus
		register_nav_menus(
			array(
				'primary-menu' => __( 'Main Navigation' ),
				'secondary-menu' => __( 'Secondary Navigation' ),
				'footer-menu' => __( 'Footer Menu' ),
			)
		);

	}
	add_action( 'init' , 'register_theme_menus' );

	// ────────────────────────────────────────────────────────────────────────────────

	class ee_mph__cust_walker extends Walker_Nav_Menu
    {

        /**
         * Building the List Item element
         * @param Referenced string $output
         * @param Post Object $item
         * @param int $depth
         * @param array $args
         * @return void
         */
        function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
        {
            $indent         = ($depth > 0 ? str_repeat("\t", $depth) : '');

            // Passed Classes
            $classes = empty($item->classes) ? array() : (array) $item->classes;
            $class_names = esc_attr(implode(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item)));

            // build html
            $output .= $indent . '<li id="nav-menu-item-' . $item->ID . '" class="my-4 md:mr-10 ' . $class_names . '">';

            if (in_array('label', $classes)) {

                $item_output = '<h5 class="text-white mb-1">'.apply_filters('the_title', $item->title, $item->ID).'</h5>';
            } elseif (in_array('nolabel', $classes)) {

                $item_output = '';
            } else {

                // link attributes
                $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
                $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
                $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
                $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';
                $attributes .= ' class="menu-link link-primary-gradient font-bold ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '"';

                $item_output = sprintf(
                    '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                    $args->before,
                    $attributes,
                    $args->link_before,
                    apply_filters('the_title', $item->title, $item->ID),
                    $args->link_after,
                    $args->after
                );
            }

            // build html
            $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        }
    }
?>