<?php
/**
 *  Assets to extend the Woocommerce plugin
 *
 * @package    spiralWebDb\extendWooCommerce\Asset
 * @since      1.0.0
 * @author     Robert A. Gadon
 * @link       http://spiralwebdb.com
 * @license    GNU General Public License 2.0+
 */

namespace spiralWebDb\extendWooCommerce\Asset;

add_action( 'woocommerce_before_single_product', __NAMESPACE__ . '\remove_short_description_template_part' );
/**
 * Remove WC single-product, short-description template part
 *
 * @since 1.0.0
 *
 * @return void
 */
function remove_short_description_template_part() {
	remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
}

/**
 * Rehook 'woocommerce_template_single_excerpt' to render the 'short-description' template part.
 */
add_action( 'woocommerce_after_single_product_summary', 'woocommerce_template_single_excerpt' );

