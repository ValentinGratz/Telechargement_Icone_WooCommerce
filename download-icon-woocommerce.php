<?php
/*
Plugin Name: Téléchargement Icône WooCommerce
Description: Ajoute une icône de téléchargement pour les produits téléchargeables.
Version: 1.0.1
Author: Votre Nom
*/

function custom_add_download_icon() {
    // Code pour ajouter l'icône de téléchargement
    if (is_product() || is_shop()) { // Vérifiez si c'est une page de produit ou de boutique
        echo '<div class="download-icon"><img src="download-solid.png" alt="Telechargement"></div>';
    }
}

}
add_action('plugins_loaded', 'custom_add_download_icon');
