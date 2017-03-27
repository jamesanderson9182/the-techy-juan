<?php
include "includes/head.php";
include "models/product.php";
include "models/Contact.php";
?>
    <div class="home-container">
        <div class="home-youtube">
            <div class="home-youtube-main"><iframe width="640" height="360" src="https://www.youtube.com/embed/pQ9L3HUHEFs?autoplay=0" frameborder="0" allowfullscreen></iframe></div><!--
            --><div class="home-login-signup">
                <div class="home-login-signup-container">
                    <div class="home-login-signup-top">
                        <a class="home-login-click" style="background-color:white;">Login</a><a class="home-signup-click" style="background-color:grey;">Sign-Up</a>
                    </div>
                    <div class="home-login">
                        <form>
                            <input type="text" name="email" placeholder="Email Address or Username">
                            <input type="text" name="password" placeholder="Password">
                        </form>
                        <div class="home-login-signup-submit">
                            <a>Login</a>
                        </div>
                    </div>
                    <div class="home-signup">
                        <form>
                            <input type="text" name="firstname" placeholder="Name">
                            <input type="text" name="username" placeholder="Username">
                            <input type="text" name="email" placeholder="Email Address">
                            <input type="text" name="password" placeholder="Password">
                        </form>
                        <div class="home-login-signup-submit">
                            <a>Sign-Up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="home-content">
            <a class="home-content-title">Looking to start a project?</a>
            <div class="home-project">
               <div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="img/yt-preview-4.png"></div><!--
            --><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="img/yt-preview-3.png"></div><!--
            --><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="img/yt-preview-1.png"></div><!--
            --><div class="home-project-tile">
                    <div class="home-project-tile-shadow"></div>
                    <img src="img/yt-preview-2.png"></div>
            </div>
        </div>

        <div class="home-content">
            <a class="home-content-title">About me</a>
            <div class="home-aboutme">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula sodales lectus eu elementum. Nulla venenatis maximus nisl, vitae semper dolor venenatis sed. Praesent finibus orci arcu, eget malesuada ipsum ultricies porta. Vivamus tellus mi, luctus quis magna vel, laoreet iaculis dolor. Donec et pharetra massa. Cras gravida est vel ex consequat, vitae tempus ligula posuere. Curabitur at ultricies eros. Nunc et elit magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi ac odio aliquam, aliquet magna elementum, viverra nibh. Aenean molestie sodales sem at vehicula. Ut et nisi bibendum, elementum enim ac, fringilla dui. Aenean et ullamcorper est. Suspendisse justo urna, euismod at ante nec, ullamcorper dapibus eros. Nulla facilisi.</p>
            </div>
        </div>

        <div class="home-content">
            <a class="home-content-title">Featured Products</a>
            <div class="home-featured-products">
               <?php 
                $products = Product::All();
                foreach ($products as $product){
                ?>
                <div class="home-featured-product">
                    <img src="http://placehold.it/300x300">
                    <h1><?= $product->product_name ?></h1>
                    <p><?= $product->getStars() ?></p>
                    <p><?= $product->product_price ?></p>
                    <a class="home-featured-product-btn" href="/product/<?= $product->product_id ?>">View Product</a>
                </div><!--
                -->
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