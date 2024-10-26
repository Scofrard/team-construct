<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mrparfait
 */

get_header();

//On récupère la variable "magique" de WP
global $wp_query;

//On récupère les variables de la requête
$query_vars = $wp_query->query_vars;

//On ajoute des paramètres à la requêtes (Ici on veut les biens qui ont l'id 36 33 et 32) (Voir url modifier le bien)
//$query_vars["post__in"] = array(36, 33, 32);

//On aurait pu aussi ajouter sur base d'une recherche avec s (Attention le s ne fonctionne que pour les blocs par défaut de WP)
//$query_vars["s"] = "bien 1";

//Pour trier par rapport à un champ personnalisé ACF il faut utiliser meta_key et meta_value
/*$query_vars["meta_key"] = "price_vate";
$query_vars["meta_value"] = "240000";*/


//Via les meta query on peut trier par exemple les biens entre 100000 et 200000 (Ajouter le type et la comparaison)
/*$query_vars["meta_query"] = array(
    array(
        "key" => "price_vate",
        "value" => array(100000, 200000),
        "compare" => "BETWEEN",
        "type" => "NUMERIC"
    )
);*/

//On peut également ordonner l'affichage, par défaut c'est en DESC dans WP
/*$query_vars["meta_key"] = "price_vate";
$query_vars["orderby"] = "meta_value_num";
$query_vars["order"] = "ASC";
var2console($query_vars);*/

if (isset($_GET['search_model']) && !empty($_GET['search_model'])) {
    $query_vars["s"] = trim($_GET['search_model']);
}

if (isset($_GET['search_price_order']) && !empty($_GET['search_price_order'])) {
    $query_vars["meta_key"] = "price_vate";
    $query_vars["orderby"] = "meta_value_num";
    $query_vars["order"] = $_GET['search_price_order'];
}

if (isset($_GET['search_style']) && !empty($_GET['search_style'])) {
    $query_vars["tax_query"] = array(
        array(
            "taxonomy" => "style",
            "field" => "slug",
            "terms" => $_GET['search_style']
        )
    );
}
//On créé une nouvelle requête avec les paramètres modifiés
$wp_query = new WP_Query($query_vars);
$styles = get_terms(array(
    "taxonomy" => "style",
    "hide_empty" => true
));

?>

<main id="primary" class="container">
    <h1>Ceci est le template de mon archive</h1>

    <form method="GET">
        <div style="display: flex; align-items: center; gap: 0.5rem">

            <?php
            $selectedAsc = false;
            if (isset($_GET['search_price_order']) && $_GET['search_price_order'] == "ASC") {
                $selectedAsc = "selected";
            }
            $selectedDesc = false;
            if (isset($_GET['search_price_order']) && $_GET['search_price_order'] == "DESC") {
                $selectedDesc = "selected";
            }
            ?>

            <?php get_template_part(
                'template-parts/forms/select',
                'select',
                array(
                    "name" => "search_price_order",
                    "options" => array(
                        array(
                            "value" => "ASC",
                            "title" => "Prix croissant",
                            "selected" => $selectedAsc
                        ),

                        array(
                            "value" => "DESC",
                            "title" => "Prix décroissant",
                            "selected" => $selectedDesc
                        )
                    ),
                )
            )
            ?>

            <?php $value = false;
            if (isset($_GET['search_model'])) {
                $value = trim($_GET['search_model']);
            } ?>

            <?php get_template_part(
                'template-parts/forms/input',
                'input',
                array(
                    "name" => "search_model",
                    "type" => "text",
                    "placeholder" => "Rechercher un modèle",
                    "value" => $value
                )
            )
            ?>



            <?php

            $options = array();
            $options[0] = array(
                "value" => "",
                "title" => "Types",
                "selected" => false,
            );
            foreach ($styles as $key => $style):
                $options[$key + 1]["value"] = $style->slug;
                $options[$key + 1]["title"] = $style->name;
                $options[$key + 1]["selected"] = false;
                if (isset($_GET['search_style']) && $_GET['search_style'] == $style->slug) {
                    $options[$key + 1]["selected"] = true;
                }
            endforeach;
            ?>

            <?php get_template_part(
                'template-parts/forms/select',
                'select',
                array(
                    "name" => "search_style",
                    "options" => $options
                )
            )
            ?>




            <button type="submit">Rechercher</button>
        </div>
    </form>


    <div class="archive-bien">
        <?php
        while (have_posts()) :
            the_post();

            get_template_part(
                'template-parts/cards/card-house',
                'card-house',
                array(
                    "image_id" => get_post_thumbnail_id(),
                    "title" => get_the_title(),
                    "description" => "Description",
                    "price" => get_field("price_vate"),
                    "area" => get_field("area"),
                    "bedrooms" => get_field("bedroom"),
                    "bathrooms" => get_field("bathroom"),
                    "href" => get_permalink(),
                    "in_whislist" => true,
                )
            );

        endwhile; // End of the loop.
        ?>
    </div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
