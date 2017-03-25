<?php
include "includes/head.php";
include "models/product.php";
?>
    <div class="youtube">
        <div class="youtube-center" onClick="window.location='https://www.youtube.com/watch?v=pQ9L3HUHEFs'"></div>
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
    <div class="products">
        <div class="center">
	        <a class="products-title">Featured Products</a>
	        <div class="products-center">
	            <?php 
	            $products = Product::All();
	            foreach ($products as $product){
	            ?>
	            <div class='product'>
	            	<img src="lorempixel.com/50/50">
			        <h1><?= $product->product_name ?></h1>
			        <p><?= $product->product_description ?></p>
			        <p><?= $product->product_price ?></p>
			        <p><?= $product->getStars() ?></p>
	  			</div>
	            <?php
	            }
	            ?>
	        </div>
        	<a class="products-view">View More</a>
    	</div>
    </div>
<?php
include 'includes/foot.php';
?>