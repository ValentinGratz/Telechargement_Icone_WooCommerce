<?php
/*
Plugin Name: Téléchargement Icône WooCommerce
Description: Ajoute une icône de téléchargement pour les produits téléchargeables.
Version: 1.0.3
Author: Valentin Grätz
*/

function custom_add_download_icon() {
    if (is_product() || is_shop()) { // Vérifiez si c'est une page de produit ou de boutique
        echo '<div class="download-icon"><img src="' . plugin_dir_url(__FILE__) . 'images/download-icon.png" alt="Téléchargement"></div>';
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'custom_add_download_icon');
add_action('woocommerce_before_single_product_summary', 'custom_add_download_icon');

function custom_add_styles() {
    if (is_product() || is_shop()) { // Vérifiez si c'est une page de produit ou de boutique
        wp_enqueue_style('custom-download-icon-css', plugin_dir_url(__FILE__) . 'css/download-icon.css');
    }
}
add_action('wp_enqueue_scripts', 'custom_add_styles');
