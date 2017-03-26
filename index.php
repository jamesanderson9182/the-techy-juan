<?php
include "includes/head.php";
include "models/product.php";
?>
    <div class="youtube">
        <div class="youtube-center">
        	<iframe src="https://www.youtube.com/embed/pQ9L3HUHEFs" frameborder="0" allowfullscreen>
			</iframe>
        </div>
        <div class="youtube-tile yt-tile-1"
             onClick="window.location='https://www.youtube.com/watch?v=ggD-B3BzBwQ'"></div>
        <div class="youtube-tile yt-tile-2"
             onClick="window.location='https://www.youtube.com/watch?v=zWNo8kZ27bU'"></div>
        <div class="youtube-tile yt-tile-3"
             onClick="window.location='https://www.youtube.com/watch?v=2nL-KXxXgRQ'"></div>
        <div class="youtube-view" onClick="window.location='https://www.youtube.com/channel/UCzFnpBkmgBF3IHdX_adsOww'">
            <a>Visit Channel</a>
        </div>
    </div>
    <div class="divider"></div>
    <div class="project">
        <a class="project-title">Looking to start a project?</a>

        <div class="project-tile project1" onClick="window.location='./projects/home-automation.php'">
            <div class="project-filter"></div>
            <a>Home Automation</a>
        </div>
        <div class="project-tile project2" onClick="window.location='./projects/kodi-entertainment.php'">
            <div class="project-filter"></div>
            <a>Kodi Entertainment</a>
        </div>
    </div>
    <div class="divider"></div>
<?php
$db = mysqli_connect('localhost', 'root', '', 'products')
or die('Error connecting to MySQL server.');
?>
    <div class="f-products">
        
        	<a class="f-products-title">Featured Products</a>
	        <div class="f-products-center">
	            <?php 
	            $products = Product::All();
	            foreach ($products as $product){
	            ?>
	            <div class='f-product'>
	            	<div class="f-product-image"></div>
			        <h1><?= $product->product_name ?></h1>
			        <p><?= $product->getStars() ?></p>
			        <p><?= $product->product_price ?></p>
			        
	  			</div>
	            <?php
	            }
	            ?>
	        </div>
        	<a class="products-view">View More</a>
    </div>
<?php
include 'includes/foot.php';
?>