
<!doctype html>
<html lang="en">
	<head>
  		<meta charset="utf-8">
  		<title>The Techy Juan</title>
		<meta name="description" content=" ... ">
		<meta name="author" content="Starr Development">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/master.css?v=1.0">
		<link rel="stylesheet" href="css/homepage.css?v=1.0">
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
		<div class="divider"></div>
		<div class="social">
			<div class="social-btn social-youtube" onClick="window.location='index.php?socialmedia=youtube'"></div>
			<div class="social-btn social-twitter" onClick="window.location='index.php?socialmedia=twitter'"></div>
			<div class="social-btn social-facebook" onClick="window.location='index.php?socialmedia=facebook'"></div>
			<div class="social-btn social-google" onClick="window.location='index.php?socialmedia=google'"></div>
		</div>
		<div class="footer">
			<a class="footer-title">the Techy Juan&nbsp;&nbsp;|</a><a class="footer-title terms-and-privacy">&nbsp;&nbsp;Terms and Privacy Policy</a>
			<div class="terms">
				<div class="terms-close"></div>
				<a class="terms-title">Terms and Privacy Policy</a>
				<div class="divider"></div>
				<div class="terms-container">
				<a class="terms-text"><b>1. Terms</b><br>By accessing the website at http://thetechyjuan.com, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.<br><br><b>2. Use License</b><br>Permission is granted to temporarily download one copy of the materials (information or software) on TheTechyJuan's website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:
				modify or copy the materials;
				use the materials for any commercial purpose, or for any public display (commercial or non-commercial);
				attempt to decompile or reverse engineer any software contained on TheTechyJuan's website;
				remove any copyright or other proprietary notations from the materials; or
				transfer the materials to another person or "mirror" the materials on any other server.
				This license shall automatically terminate if you violate any of these restrictions and may be terminated by TheTechyJuan at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.<br><br><b>3. Disclaimer</b><br>The materials on TheTechyJuan's website are provided on an 'as is' basis. TheTechyJuan makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.
				Further, TheTechyJuan does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.
				<br><br><b>4. Limitations</b><br>In no event shall TheTechyJuan or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on TheTechyJuan's website, even if TheTechyJuan or a TheTechyJuan authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.<br><br><b>5. Accuracy of materials</b><br>The materials appearing on TheTechyJuan's website could include technical, typographical, or photographic errors. TheTechyJuan does not warrant that any of the materials on its website are accurate, complete or current. TheTechyJuan may make changes to the materials contained on its website at any time without notice. However TheTechyJuan does not make any commitment to update the materials.<br><br><b>6. Links</b><br>TheTechyJuan has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by TheTechyJuan of the site. Use of any such linked website is at the user's own risk.<br><br><b>7. Modifications</b><br>TheTechyJuan may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.<br><br><b>8. Governing Law</b><br>These terms and conditions are governed by and construed in accordance with the laws of Michigan and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.<br><br><b>Privacy Policy</b><br><br>Your privacy is important to us.<br><br>It is TheTechyJuan's policy to respect your privacy regarding any information we may collect while operating our website. Accordingly, we have developed this privacy policy in order for you to understand how we collect, use, communicate, disclose and otherwise make use of personal information. We have outlined our privacy policy below.<br><br>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.
				Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.<br><br>We will collect and use personal information solely for fulfilling those purposes specified by us and for other ancillary purposes, unless we obtain the consent of the individual concerned or as required by law.<br><br>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.
				We will protect personal information by using reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.
				We will make readily available to customers information about our policies and practices relating to the management of personal information.<br><br>We will only retain personal information for as long as necessary for the fulfilment of those purposes.
				We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. TheTechyJuan may change this privacy policy from time to time at TheTechyJuan's sole discretion.</a></div>
			</div>
		</div>
	</body>
</html>