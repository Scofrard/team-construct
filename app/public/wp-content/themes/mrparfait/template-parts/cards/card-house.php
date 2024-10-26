<?php
/* $price = get_field('price_vate', 25);
$price = number_format($price, 2, ',', '.');
$area = get_field('area', 25);
$area = number_format($area, 0, ',', '.');
$bedroom = get_field('bedroom', 25);
$bathroom = get_field('bathroom', 25);*/

$image_id = false;
$title = false;
$description = false;
$price = false;
$area = false;
$bedrooms = false;
$bathrooms = false;
$href = false;
$in_whislist = false;

if (isset($args["image_id"])) {
    $image_id = $args["image_id"];
}
if (isset($args["title"])) {
    $title = $args["title"];
}
if (isset($args["description"])) {
    $description = $args["description"];
}
if (isset($args["price"])) {
    $price = $args["price"];
    $price = number_format($price, 2, ',', '.');
}
if (isset($args["area"])) {
    $area = $args["area"];
    $area = number_format($area, 0, ',', '.');
}
if (isset($args["bedrooms"])) {
    $bedrooms = $args["bedrooms"];
}
if (isset($args["bathrooms"])) {
    $bathrooms = $args["bathrooms"];
}
if (isset($args["href"])) {
    $href = $args["href"];
}
if (isset($args["in_whislist"])) {
    $in_whislist = $args["in_whislist"];
}
?>

<article class="card">
    <div class="card-content">
        <?php if (!empty($image_id)): ?>
            <?= wp_get_attachment_image($image_id, 'full') ?>
        <?php endif; ?>
        <div class=" card-house">
            <?php if (!empty($title)): ?>
                <h4><?= $title ?></h4>
            <?php endif; ?>
            <?php if (!empty($price)): ?>
                <p><?= $price ?>€ HTVA</p>
            <?php endif; ?>
        </div>
        <div class="card-description">
            <ul>
                <?php if (!empty($area)): ?>
                    <li><?php get_template_part('template-parts/icons/house') ?><span><?= $area ?>m2</span></li>
                <?php endif; ?>
                <?php if (!empty($bedrooms)): ?>
                    <li><?php get_template_part('template-parts/icons/bedroom') ?><span><?= $bedrooms ?>ch</span></li>
                <?php endif; ?>
                <?php if (!empty($bathrooms)): ?>
                    <li><?php get_template_part('template-parts/icons/bathroom') ?><span><?= $bathrooms ?> SDB</span> </li>
                <?php endif; ?>
            </ul>
        </div>
        <a href="<?= $in_whislist ?> " class="add_whishlist"><?php get_template_part('template-parts/icons/heart') ?></a>
        <a href="<?= $href ?>" class="card-link"></a>
    </div>

</article>