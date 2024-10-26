<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package mrparfait
 */

get_header();
?>

<main id="primary" class="site-main">
    <h1>Ceci est le template de mon article bien</h1>

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

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
