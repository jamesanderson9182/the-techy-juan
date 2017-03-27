<?php

include "includes/head.php";
include 'models/Product.php';

if (isset($_SERVER["PATH_INFO"])) {
    $productID = str_replace('/', '', $_SERVER["PATH_INFO"]);
    $productID = $productID - 1 + 1;

    if (is_int($productID) && $productID > 0) {
        printOne($productID);
    } else {
        printAll();
    }
} else {
    printAll();
}

function printOne($id)
{
    $product = new Product($id)
    ?>
    <a href="/product/" class="back-button-link" ">All Products</a>
    <div class='center'>
        <div class="product-container">
            <div class='product'>
                <h1><?= $product->product_name ?></h1>
                <p><?= $product->product_description ?></p>
                <p><?= $product->product_price ?></p>
                <p><?= $product->getStars() ?></p>
            </div>
        </div>
    </div>
    <?php
}

function printAll()
{
    $products = Product::All();
    if (sizeof($products) > 0) {
        print "<div class='center'>";
        print '<div class="product-container">';
        /** @var Product $product */
        foreach ($products as $product) {
            ?>
            <div class='product'>
                <h1><a href="/product/<?= $product->product_id ?>"><?= $product->product_name ?></a></h1>
                <p><?= $product->product_description ?></p>
                <p><?= $product->product_price ?></p>
                <p><?= $product->getStars() ?></p>
            </div>
            <?php
        }
        print "</div>";
        print "</div>";
    } else {
        print 'Sorry, no products for sale. Check back later!';
    }
}

include 'includes/foot.php';