<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mrparfait
 */

get_header();
?>

<main id="primary" class="site-main">
    <h1>Ceci est le template de ma page par défaut</h1>

    <?php
    while (have_posts()) :
        the_post();
        the_content();

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<div class="admin">
    Mon texte est dans le code
</div>


<?php
get_footer();
