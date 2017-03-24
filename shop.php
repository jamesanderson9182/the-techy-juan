<?php
include "includes/head.php";
?>
    <body>
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
                <div class="mobile-navigation-drop-cart">
                    <a>View your Shopping Cart (0)</a>
                </div>
                <div class="mobile-navigation-drop-account" onClick="window.location='cart.php'">
                    <a style="color:grey" href="#">Login</a>
                    <a> or </a>
                    <a style="color:grey" href="#">Sign-up</a>
                </div>
            </div>

        </div>

        <div class="desktop-navigation">

        </div>
    </div>
    <div class="down-for-maintenance">
        <a>Our Shop is currently under maintenance!</a>
    </div>
<?php
include 'includes/foot.php';
?>