<?php
include "includes/head.php";
        // todo: Put this into it's own file that we can include
        // todo: PDO database as mysqli is deprecated
		$db = mysqli_connect('localhost','root','','products')
 		or die('Error connecting to MySQL server.');
		?>

		<?php
			$query = "SELECT * FROM product_list WHERE product_id='" . htmlspecialchars($_GET["id"]) . "'";
			mysqli_query($db, $query) or die('Error querying database.');

			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);
			$pageContents = ob_get_contents ();
			ob_end_clean ();
			$productid = $row['product_id'];
			$productname = $row['product_name'];
			$productprice = $row['product_price'];
			$productdescription = $row['product_description'];
			$productimage = $row['product_image'];
			$productreview = $row['product_review'];
			echo str_replace ('<!--PRODUCTNAME-->', $productname, $pageContents);
		?>
			<div class="navigation-cutter">
				<a href="index.php">Home&nbsp;>&nbsp;</a>
				<a href="shop.php">Products&nbsp;>&nbsp;</a>
				<a href="product.php?id=<?php echo $productid ?>"><?php echo $productname ?></a>
			</div>
			<div class="product-page-container">
				<div class="product-page-image" style="background-image:url(<?php echo $productimage ?>);background-size:cover;background-position:center;background-repeat:no-repeat;"></div>
				<div class="product-page-main">
					<a class="product-page-title"><?php echo $productname ?></a>
					<div class="product-page-review">
						<div class="product-page-review-top" style="width:<?php echo $productreview ?>%;"></div>
					</div>
					
					<a class="product-page-price">$<?php echo $productprice ?></a>
					<a class="product-page-cart-btn">Add to cart</a>
					
					<div class="divider"></div>	
					
					<div class="product-page-description">
						<div class="product-page-description-show"><a>Show more</a></div>
						<a class="product-page-description-title">Product Description</a>
						<a class="product-page-description-text"><?php echo $productdescription ?></a>
					</div>
				</div>
			</div>
<?php
include 'includes/foot.php';
?>