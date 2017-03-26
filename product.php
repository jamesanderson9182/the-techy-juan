<?php

include "includes/head.php";
include 'models/Product.php';

$products = Product::All();
print "<div class='center'>";
print '<div class="product-container">';
/** @var Product $product */
foreach ($products as $product) {
    ?>
    <div class='product'>
        <h1><?= $product->product_name ?></h1>
        <p><?= $product->product_description ?></p>
        <p><?= $product->product_price ?></p>
        <p><?= $product->getStars() ?></p>
    </div>
    <?php
}
print "</div>";
print "</div>";

include 'includes/foot.php';
