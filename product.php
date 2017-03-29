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
    <div class="page">
        <div class="page-inner" style="text-align: left;">
            <span class="product-page-back-span">
            <a class="product-page-back" href="/product.php/">Products&nbsp;/&nbsp;</a>
            <a class="product-page-back" href="/product.php/<?= $product->ProductID ?>"><?= $product->Name ?></a>
            </span>
        </div>
        <div class="page-inner">
            <div id="product-page-main-container">
                <div id="product-page-image-container">
                    <div id="product-page-image">
                        <img src="http://placehold.it/300x300">
                    </div><!--
                    --><div id="product-page-image-more">
                        <div id="product-page-image-more-inner">
                            <div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div><!--
                            --><div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div><!--
                            --><div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div><!--
                            --><div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div><!--
                            --><div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div><!--
                            --><div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div><!--
                            --><div class="product-page-image-more-tile">
                                <img src="http://placehold.it/300x300">
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div><!--
                --><div id="product-page-right-container">
                    <div id="product-page-right-insert">
                        <div id="product-page-title">
                            <h1><?= $product->Name ?></h1>
                        </div>
                        <div id="product-page-desc">
                            <p><?= $product->Description ?></p>
                            <p><?= $product->Price ?></p>
                            <p><?= $product->getStars() ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}

function printAll()
{
    $products = Product::All();
    if (sizeof($products) > 0) {
        print "<div class='page'>";
        include "/includes/shop_top.php";
        print '<div class="page-inner">';
        print '<div class="products-page-container">';
        print '<div class="products-page-tile">';
        /** @var Product $product */
        foreach ($products as $product) {
            ?>
                <a href="/product.php/<?= $product->ProductID ?>" class="products-page-wrap">
                <img src="http://placehold.it/300x300">
                <h1><?= $product->Name ?></h1>
                <p>$<?= $product->Price ?></p>
                <p><?= $product->getStars() ?></p>
                </a>
            </div><div class='products-page-tile'><?php
        }
        print "</div>";
        print "</div>";
        print "</div>";
    } else {
        print 'Sorry, no products for sale. Check back later!';
    }
}

include 'includes/foot.php';