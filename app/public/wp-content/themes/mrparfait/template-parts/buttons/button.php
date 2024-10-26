<?php
$type = "button";
$href = false;
$title = false;
$target = false;
$class = "btn";

if (isset($args["type"])) {
    $type = $args["type"];
}

if (isset($args["href"])) {
    $href = 'href="' . $args["href"] . '"';
}

if (isset($args["title"])) {
    $title = $args["title"];
}

if (isset($args["target"])) {
    $target = 'target="' . $args["target"] . '"';
}

if (isset($args["class"])) {
    $class = $args["class"];
}

?>

<<?= $type ?> <?= $href ?> class="<?= $class ?>" <?= $target ?>> <?= $title ?> </<?= $type ?>>