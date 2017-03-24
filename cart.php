<!doctype html>
<html lang="en">
	<head>
  		<meta charset="utf-8">
  		<title>The Techy Juan Cart</title>
		<meta name="description" content=" ... ">
		<meta name="author" content="Starr Development">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/master.css?v=1.0">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>

	<body>
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/main.js"></script>
		
		<div class="filter"></div>
		<div class="navigation-ghost"></div>
		<div class="navigation">
			<div class="mobile-navigation">
				<div class="mobile-navigation-logo"></div>
				<div class="mobile-navigation-btn"></div>

				<div class="mobile-navigation-drop">
						<ul>
							<li><a href="index.php">HOME</a></li>
								<div class="mobile-navigation-underline"></div>
							<li><a href="shop.php">SHOP</a></li>
								<div class="mobile-navigation-underline"></div>
							<li><a href="forum.php">FORUM</a></li>
								<div class="mobile-navigation-underline"></div>
							<li><a href="blog.php">BLOG</a></li>
								<div class="mobile-navigation-underline"></div>
							<li><a href="contact.php">CONTACT</a></li>
						</ul>
						<div class="mobile-navigation-drop-cart" onClick="window.location='cart.php'">
							<a>View  your Shopping Cart (0)</a>
						</div>
						<div class="mobile-navigation-drop-account">
							<a style="color:grey" href="#">Login</a>
							<a> or </a>
							<a style="color:grey" href="#">Sign-up</a>
						</div>
				</div>

			</div>

			<div class="desktop-navigation">
				
			</div>
		</div>
		<div class="navigation-cutter">
			<a href="index.php">Home&nbsp;>&nbsp;</a>
			<a href="cart.php">Shopping Cart</a>
		</div>

			<a>Shopping cart out of order</a>	
		<div class="divider"></div>
		<div class="social">
			<div class="social-btn social-youtube" onClick="window.location='index.php?socialmedia=youtube'"></div>
			<div class="social-btn social-twitter" onClick="window.location='index.php?socialmedia=twitter'"></div>
			<div class="social-btn social-facebook" onClick="window.location='index.php?socialmedia=facebook'"></div>
			<div class="social-btn social-google" onClick="window.location='index.php?socialmedia=google'"></div>
		</div>
		<div class="footer">
			<a>the Techy Juan&nbsp;&nbsp;|&nbsp;&nbsp;Terms and Conditions</a>
		</div>
	</body>
</html>