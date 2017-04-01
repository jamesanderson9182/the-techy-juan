<?php
include "includes/head.php";
include "models/product.php";
include "models/Contact.php";
include "models/User.php";
include "models/data-seeder/DataSeeder.php";
//new DataSeeder();
?>

    <div class="page">
        <div class="home-youtube page-inner">
            <div class="home-youtube-main">
                <iframe width="640" height="360" src="https://www.youtube.com/embed/pQ9L3HUHEFs?autoplay=0"
                        frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="home-top-content">
                <div class="home-top-content-container">
                    <a class="home-top-content-title">Header Title</a><!--
                    --><div class="home-top-content-divider"></div>
                    <a class="home-top-content-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula sodales lectus eu elementum. Nulla venenatis maximus nisl, vitae semper dolor venenatis sed. Praesent finibus orci arcu, eget malesuada ipsum ultricies porta. Vivamus tellus mi, luctus quis magna vel, laoreet iaculis dolor. Donec et pharetra massa. Cras gravida est vel ex consequat, vitae tempus ligula posuere. Curabitur at ultricies eros.</a>
                    <a href="#" class="home-top-content-btn">Get Started</a>
                </div>
            </div>
        </div>

        <div class="page-inner">
            <a class="home-content-title">Looking to start a project?</a>
            <div class="home-content-divider"></div>
            <div class="home-project">
                <?php include "/includes/projectsConfig.php";?>
               <a href="<?php echo $project_link_1?>"><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="<?php echo $project_thumbnail_1?>"></div></a><!--
            --><a href="<?php echo $project_link_2?>"><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="<?php echo $project_thumbnail_2?>"></div></a><!--
            --><a href="<?php echo $project_link_3?>"><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="<?php echo $project_thumbnail_3?>"></div></a><!--
            --><a href="<?php echo $project_link_4?>"><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="<?php echo $project_thumbnail_4?>"></div>
            </div></a>
        </div>

        <div class="page-inner">
            <a class="home-content-title">About me</a>
            <div class="home-content-divider"></div>
            <div class="home-aboutme">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula sodales lectus eu elementum.
                    Nulla venenatis maximus nisl, vitae semper dolor venenatis sed. Praesent finibus orci arcu, eget
                    malesuada ipsum ultricies porta. Vivamus tellus mi, luctus quis magna vel, laoreet iaculis dolor.
                    Donec et pharetra massa. Cras gravida est vel ex consequat, vitae tempus ligula posuere. Curabitur
                    at ultricies eros. Nunc et elit magna. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                    Morbi ac odio aliquam, aliquet magna elementum, viverra nibh. Aenean molestie sodales sem at
                    vehicula. Ut et nisi bibendum, elementum enim ac, fringilla dui. Aenean et ullamcorper est.
                    Suspendisse justo urna, euismod at ante nec, ullamcorper dapibus eros. Nulla facilisi.</p>
            </div>
        </div>

        <div class="page-inner">
            <a class="home-content-title">Featured Products</a>
            <div class="home-content-divider"></div>
            <div class="home-featured-products">
                <?php
                /** @var $product Product */
                $products = Product::All();
                foreach ($products as $product) {
                    ?>
                    <div class="home-featured-product">
                        <img src="http://placehold.it/300x300">
                        <h1><?= $product->Name ?></h1>
                        <p><?= $product->getStars() ?></p>
                        <p><?= $product->getPrice() ?></p>
                        <a class="home-featured-product-btn" href="/product.php/<?= $product->ProductID ?>">View Product</a>
                    </div>
                    <?php
                }
                ?>
                <div class="home-featured-products-anchor"></div>
                <a href="#" class="home-featured-products-view">View More</a>
            </div>
        </div>
    </div>

<?php
include 'includes/foot.php';

?>