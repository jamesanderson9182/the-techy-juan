<?php
include "includes/head.php";
include "models/product.php";
?>
    <div class="page">
        <div class="page-inner"><a>This is our shop</a></div>
        <div class="page-inner">
            <?php 
                $products = Product::All();
                foreach ($products as $product){
            ?>
                <div class="home-featured-product">
                    <img src="http://placehold.it/300x300">
                    <h1><?= $product->product_name ?></h1>
                    <p><?= $product->getStars() ?></p>
                    <p><?= $product->product_price ?></p>
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