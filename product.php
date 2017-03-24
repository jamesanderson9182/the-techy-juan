<?php
include "includes/head.php";
// todo: Put this into it's own file that we can include
// todo: PDO database as mysqli is deprecated
$db = mysqli_connect('localhost', 'root', '', 'products')
or die('Error connecting to MySQL server.');
?>

<?php
$query = "SELECT * FROM product_list WHERE product_id='" . htmlspecialchars($_GET["id"]) . "'";
mysqli_query($db, $query) or die('Error querying database.');

$result = mysqli_query($db, $query);
$row = mysqli_fetch_array($result);
$pageContents = ob_get_contents();
ob_end_clean();
$productId = $row['product_id'];
$productName = $row['product_name'];
$productPrice = $row['product_price'];
$productDescription = $row['product_description'];
$productImage = $row['product_image'];
$productReview = $row['product_review'];
echo str_replace('<!--PRODUCTNAME-->', $productName, $pageContents);
?>
    <div class="navigation-cutter">
        <a href="index.php">Home&nbsp;>&nbsp;</a>
        <a href="shop.php">Products&nbsp;>&nbsp;</a>
        <a href="product.php?id=<?php echo $productId ?>"><?php echo $productName ?></a>
    </div>
    <div class="product-page-container">
        <div class="product-page-image"
             style="background-image:url(<?php echo $productImage ?>);background-size:cover;background-position:center;background-repeat:no-repeat;"></div>
        <div class="product-page-main">
            <a class="product-page-title"><?php echo $productName ?></a>
            <div class="product-page-review">
                <div class="product-page-review-top" style="width:<?php echo $productReview ?>%;"></div>
            </div>

            <a class="product-page-price">$<?php echo $productPrice ?></a>
            <a class="product-page-cart-btn">Add to cart</a>

            <div class="divider"></div>

            <div class="product-page-description">
                <div class="product-page-description-show"><a>Show more</a></div>
                <a class="product-page-description-title">Product Description</a>
                <a class="product-page-description-text"><?php echo $productDescription ?></a>
            </div>
        </div>
    </div>
<?php
include 'includes/foot.php';
?>