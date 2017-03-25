<?php
include "includes/head.php";
// todo: Put this into it's own file that we can include
// todo: PDO database as mysqli is deprecated

try {
    $db = new PDO('mysql:host=localhost;dbname=products;charset=utf8mb4', 'root', '');
    $products = $db->query("select * from product_list", PDO::FETCH_OBJ)->fetchAll();

    foreach ($products as $product) {
        print "<div class='product'>";
        print "<p>" . $product->product_name . "</p>";
        print "<p>" . $product->product_description . "</p>";
        print "<p>" . $product->product_price . "</p>";
        print "<p>" . $product->product_review . "</p>";
        print "</div>";
    }
} catch (Exception $exception) {
    print $exception->getMessage();
}

include 'includes/foot.php';