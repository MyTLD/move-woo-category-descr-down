<?php
/**
 * Plugin Name: WooCommerce Category Description Down
 * Plugin URI:https://themehow.com/
 * Description: Move down in the page the description of products category
 * Author: ThemeHow
 * Author URI: https://themehow.com/
 * Version: 1.0
 * Forked:https://github.com/ThemeHowWooCommerce/Move-WooCommerce-Category-Deescription-Down-in-page/
 */
/**
 * Always check the WC Terms & Conditions checkbox
 *
 * @since 1.0
 *
 * @return bool
 */
// Muta descrierea de la categoria produselor jos in pagina
// Move down in the page the description of products category
remove_action( 'woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10 );
add_action( 'woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description' );
