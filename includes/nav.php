<body>
<div class="filter"></div>
<div class="navigation-ghost"></div>
<div class="navigation">
    <div class="mobile-navigation">
        <a href="/">
            <div class="mobile-navigation-logo"></div>
        </a>
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
                <a href="?popup=cart">View your Shopping Cart (0)</a>
            </div>
            <div class="mobile-navigation-drop-account">
                <a style="color:grey" href="?popup=login">Login</a>
                <a> or </a>
                <a style="color:grey" href="?popup=signup">Sign-up</a>
            </div>
        </div>

    </div>

    <div class="desktop-navigation">
        <div class="center">
            <div class="desktop-navigation-cart">
                <a href="?popup=cart">Shopping Cart(0)</a>
                <a style="color:grey;">&nbsp;|&nbsp;</a>
                <a href="?popup=login">Login</a>
                <a style="color:grey;">&nbsp;|&nbsp;</a>
                <a href="?popup=signup">Sign-up</a>
            </div>
        </div>
        <div class="desktop-navigation-container">
            <div class="desktop-navigation-logo"></div>
            <div class="desktop-navigation-right">
                <ul>
                    <li class="desktop-navigation-li"><a href="index.php">Home</a></li>
                    <li class="desktop-navigation-div"></li>
                    <li class="desktop-navigation-li"><a href="shop.php">Shop</a></li>
                    <li class="desktop-navigation-div"></li>
                    <li class="desktop-navigation-li"><a href="forum.php">Forum</a></li>
                    <li class="desktop-navigation-div"></li>
                    <li class="desktop-navigation-li"><a href="blog.php">Blog</a></li>
                    <li class="desktop-navigation-div"></li>
                    <li class="desktop-navigation-li"><a href="contact.php">Contact</a></li>
                </ul>
                <div class="desktop-navigation-search">
                    <span class="desktop-navigation-search-icon"><i class="fa fa-search"></i></span>
                    <input type="search" id="search" placeholder="Search..." />
                </div>
            </div>
        </div>
    </div>
</div>