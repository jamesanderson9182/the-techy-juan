<?php
include "includes/head.php";
include "models/product.php";
?>
    <div class="page">
        <div class="page-inner"><a>This is our shop</a></div>
        <div class="page-inner">
            <?php
                $products = Product::All();
                /** @var Product $product */
            foreach ($products as $product){
            ?>
                <div class="home-featured-product">
                    <img src="http://placehold.it/300x300">
                    <h1><?= $product->Name ?></h1>
                    <p><?= $product->getStars() ?></p>
                    <p><?= $product->getPrice() ?></p>
                    <a class="home-featured-product-btn" href="#">View Product</a>
                </div><!--
                -->
            <?php
                }
            ?>
        </div>
    </div>
<?php
include 'includes/foot.php';
?>