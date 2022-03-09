<?php
/**
 * Display all shoppingcart functions and definitions
 *
 * @package Theme Freesia
 * @subpackage ShoppingCart
 * @since ShoppingCart 1.0
 */

 /**
* Making the theme Woocommrece compatible
*/

add_theme_support( 'woocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
function my_scripts_method() {
     wp_enqueue_script(
           'custom-script',
           get_stylesheet_directory_uri() . '/js/topbutton.js',
           array( 'jquery' )
     );
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method' );