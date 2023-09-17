# Telechargement_Icone_WooCommerce
Extension WordPress Woocommerce pour ajouter une icône de téléchargement pour les produits téléchargeables.

## Description
Cette extension permet d'avoir sur la fiche produit WooCommerce une case à cocher pour un produit en téléchargement, permettant de l'afficher sous forme d'îcone sur l'image de la fiche produit,, ainsi que sur la boutique comme ceci : 

![Capture d'écran 2023-09-17 103416.png](https://github.com/ValentinGratz/Telechargement_Icone_WooCommerce/blob/main/Capture%20d'%C3%A9cran%202023-09-17%20103416.png)


# Versions/ Changelog
- v 1 : Première version du code générée par ChatGPT

- v 1.0.1 : Ajout du png de l'icone de téléchargement et modification du src

- v 1.0.2 : Correction de l'erreur critique, retrait du code en trop

- v 1.0.3 : Ajout de style CSS et gestion des produits téléchargeables

Code supplémentaire ajouté :

style CSS : 

```
function custom_add_styles() {
    if (is_product() || is_shop()) { // Vérifiez si c'est une page de produit ou de boutique
        wp_enqueue_style('custom-download-icon-css', plugin_dir_url(__FILE__) . 'css/download-icon.css');
    }
}
add_action('wp_enqueue_scripts', 'custom_add_styles');
```

Gestion des produits téléchargeables :

Pour vous assurer que l'icône apparaît uniquement pour les produits téléchargeables, vous pouvez ajouter une condition en utilisant les fonctions WooCommerce. Vous devrez également vous assurer que votre code d'icône est encapsulé dans cette condition. Voici comment vous pouvez le faire :

```
function custom_add_download_icon() {
    global $product;
    
    if (is_product() || is_shop()) {
        if ($product->is_downloadable()) {
            echo '<div class="download-icon"><img src="' . plugin_dir_url(__FILE__) . 'images/download-icon.png" alt="Téléchargement"></div>';
        }
    }
}
add_action('woocommerce_before_shop_loop_item_title', 'custom_add_download_icon');
add_action('woocommerce_before_single_product', 'custom_add_download_icon');

```


# Erreur - amélioration
- Devenu plugin invalide, en-tête manquant 
- voir correction chemin de l'icon
