<?php
/*
Template Name: Design system
*/
get_header();
?>


<main class="main">
    <h1>Toffee cake chupa chups chocolate chupa chups</h1>
    <h2>Toffee cake chupa chups chocolate chupa chups</h2>
    <h3>Toffee cake chupa chups chocolate chupa chups</h3>
    <h4>Toffee cake chupa chups chocolate chupa chups</h4>
    <h5>Toffee cake chupa chups chocolate chupa chups</h5>
    <h6>Toffee cake chupa chups chocolate chupa chups</h6>
    <span>Span</span>
    <p><strong>Toffee cake chupa chups chocolate chupa chups gummi bears.</strong> Lemon drops sesame snaps croissant <a href="#"> jujubes marshmallow pie</a>. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</p>
    <ul>
        <li><a href="#">Toffee cake chupa chups chocolate chupa chups gummi bears.</a> Lemon drops sesame snaps croissant jujubes marshmallow pie. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</li>
        <li><a href="#">Toffee cake chupa chups chocolate chupa chups gummi bears.</a> Lemon drops sesame snaps croissant jujubes marshmallow pie. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</li>
        <li><a href="#">Toffee cake chupa chups chocolate chupa chups gummi bears.</a> Lemon drops sesame snaps croissant jujubes marshmallow pie. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</li>
        <ol>
            <li>Toffee cake chupa chups chocolate chupa chups gummi bears. Lemon drops sesame snaps croissant jujubes marshmallow pie. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</li>
            <li>Toffee cake chupa chups chocolate chupa chups gummi bears. Lemon drops sesame snaps croissant jujubes marshmallow pie. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</li>
            <li>Toffee cake chupa chups chocolate chupa chups gummi bears. Lemon drops sesame snaps croissant jujubes marshmallow pie. Lollipop cotton candy pastry shortbread lemon drops. Wafer cotton candy chocolate cake topping dragée jelly beans. Pudding oat cake dessert sweet roll dragée. Icing tiramisu powder chupa chups dragée chocolate bar. Gingerbread dragée pie ice cream sugar plum sweet. Danish sesame snaps sweet jelly cookie.</li>
        </ol>
    </ul>
    <div>
        <h3>Mon bouton primaire</h3>
        <button class="btn">Mon bouton</button>
        <input class="btn" type="submit" value='Mon bouton "input" '>
        <a href="#" class="btn">Mon bouton "a"</a>
    </div>
    <br>
    <div>
        <h3>Mon bouton secondaire</h3>
        <button class="btn secondary">Mon bouton</button>
        <input class="btn secondary" type="submit" value='Mon bouton "input" '>
        <a href="#" class="btn secondary">Mon bouton "a"</a>
    </div>
    <br>
    <div>
        <h3>Mes boutons template-part</h3>
        <?php get_template_part(
            'template-parts/buttons/button',
            false,
            array(
                "type" => "a",
                "href" => "www.google.com",
                "title" => "Mon lien template-part",
                "target" => "_blank",
                "class" => "btn"
            )
        )
        ?>
        <br><br>
        <?php get_template_part(
            'template-parts/buttons/button',
            false,
            array(
                "type" => "a",
                "href" => "www.google.com",
                "title" => "Mon lien template-part secondary",
                "target" => "_blank",
                "class" => "btn secondary"
            )
        )
        ?>
        <br><br>
        <?php get_template_part(
            'template-parts/buttons/button',
            false,
            array(
                "type" => "button",
                "title" => "Mon bouton template-part",
                "class" => "btn"
            )
        )
        ?>
        <br><br>
        <?php get_template_part(
            'template-parts/buttons/button',
            false,
            array(
                "type" => "button",
                "title" => "Mon bouton template-part secondary",
                "class" => "btn secondary"
            )
        )
        ?>
    </div>
    <br><br>

    <h3>Formulaire</h3>
    <?php get_template_part(
        'template-parts/forms/input',
        'input',
        array(
            "label" => "Nom",
            "labelinfo" => "Requis",
            "name" => "Nom",
            "type" => "text",
            "placeholder" => "Nom"
        )
    )
    ?>
    <?php get_template_part(
        'template-parts/forms/input',
        'input',
        array(
            "label" => "Prénom",
            "labelinfo" => "Requis",
            "name" => "Prénom",
            "type" => "text",
            "placeholder" => "Prénom"
        )
    )
    ?>
    <?php get_template_part(
        'template-parts/forms/input',
        'input',
        array(
            "label" => "Email",
            "labelinfo" => "Requis",
            "name" => "Email",
            "type" => "email",
            "placeholder" => "Email"
        )
    )
    ?>
    <?php get_template_part(
        'template-parts/forms/input',
        'input',
        array(
            "label" => "Mot de passe",
            "labelinfo" => "Requis",
            "name" => "Mot de passe",
            "type" => "password",
            "placeholder" => "Mot de passe"
        )
    )
    ?>
    <?php get_template_part(
        'template-parts/forms/input',
        'input',
        array(
            "label" => "Téléphone",
            "value" => "+32",
            "name" => "Téléphone",
            "type" => "tel",
            "placeholder" => "Téléphone"
        )
    )
    ?>

    <?php get_template_part(
        'template-parts/forms/select',
        'select',
        array(
            "name" => "Trier par prix",
            "label" => "Tier par prix",
            "labelinfo" => "Requis",
            "options" => array(
                array(
                    "value" => "",
                    "title" => "Entrez un prix",
                    "selected" => false
                ),
                array(
                    "value" => "1",
                    "title" => "Entre 0 et 100 000",
                    "selected" => false
                ),
                array(
                    "value" => "2",
                    "title" => "Entre 100 000 et 600 000",
                    "selected" => true
                )
            ),
        )
    )
    ?>

    <h3>Card house</h3>

    <?php
    $id_bien = 25;
    $bien = array(25, 30, 31, 32, 33, 36)
    ?>

    <?php get_template_part(
        'template-parts/cards/card-house',
        'card-house',
        array(
            "image_id" => get_post_thumbnail_id($id_bien),
            "title" => get_the_title($id_bien),
            "description" => "Description",
            "price" => get_field("price_vate", $id_bien),
            "area" => get_field("area", $id_bien),
            "bedrooms" => get_field("bedroom", $id_bien),
            "bathrooms" => get_field("bathroom", $id_bien),
            "href" => get_permalink($id_bien),
            "in_whislist" => true,
        )
    )
    ?>

    <?php foreach ($bien as $id_bien): ?>
        <?php get_template_part(
            'template-parts/cards/card-house',
            'card-house',
            array(
                "image_id" => get_post_thumbnail_id($id_bien),
                "title" => get_the_title($id_bien),
                "description" => "Description",
                "price" => get_field("price_vate", $id_bien),
                "area" => get_field("area", $id_bien),
                "bedrooms" => get_field("bedroom", $id_bien),
                "bathrooms" => get_field("bathroom", $id_bien),
                "href" => get_permalink($id_bien),
                "in_whislist" => true,
            )
        )
        ?>
    <?php endforeach; ?>

    <br><br><br><br><br><br>

</main>


<?php
get_footer();
