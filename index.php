<?php
include "includes/head.php";
?>
		<div class="youtube">
			<div class="youtube-center" onClick="window.location='https://www.youtube.com/watch?v=pQ9L3HUHEFs'"></div>
			<div class="youtube-tile yt-tile-1" onClick="window.location='https://www.youtube.com/watch?v=ggD-B3BzBwQ'"></div>
			<div class="youtube-tile yt-tile-2" onClick="window.location='https://www.youtube.com/watch?v=zWNo8kZ27bU'"></div>
			<div class="youtube-tile yt-tile-3" onClick="window.location='https://www.youtube.com/watch?v=2nL-KXxXgRQ'"></div>
			<div class="youtube-view"  onClick="window.location='https://www.youtube.com/channel/UCzFnpBkmgBF3IHdX_adsOww'">
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
		$db = mysqli_connect('localhost','root','','products')
 		or die('Error connecting to MySQL server.');
		?>
		<div class="products">
			<a class="products-title">Featured Products</a>
			<div class="products-center">
				<?php
				//Step2
				$query = "SELECT * FROM products.featured_list;";
				mysqli_query($db, $query) or die('Error querying database.');

				$result = mysqli_query($db, $query);
				$row = mysqli_fetch_array($result);

				while ($row = mysqli_fetch_array($result)) {
				 $productid = $row['product_id'];
				 $productname = $row['product_name'];
				 $productprice = $row['product_price'];
				 $productimage = $row['product_image'];
				 $productreview = $row['product_review'];

				 $phref = "window.location='product.php?id=" . $productid . "';";
				 
				 echo '<div class="product-tile" onClick="'. $phref .'"><div class="product-image" style="background-image:url('. $productimage .');background-size:cover;background-position:center;background-repeat:no-repeat;"></div><a class="product-title">' . $productname .'</a><div class="product-review"><div class="product-review-top" style="width:' . $productreview . '%;"></div></div><a class="product-price">$' . $productprice . '</a></div>';
				}
				mysqli_close($db);
				?>
			</div>
			<a class="products-view">View More</a>
		</div>
<?php
include 'includes/foot.php';
?>