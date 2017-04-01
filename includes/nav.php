<body>
<div class="filter"></div>
<div class="navigation-ghost"></div>
<div class="navigation">
    <div class="mobile-navigation">
        <a class="mobile-navigation-logo-container" href="/">
            <div class="mobile-navigation-logo"></div>
        </a>
        <div id="mobile-navigation-btn-container">
            <div class="mobile-navigation-btn">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div class="mobile-navigation-drop">
            <ul>
                <li><a href="/index.php">HOME</a></li>
                <div class="mobile-navigation-underline"></div>
                <li><a href="/product.php">SHOP</a></li>
                <div class="mobile-navigation-underline"></div>
                <li><a href="/forum.php">FORUM</a></li>
                <div class="mobile-navigation-underline"></div>
                <li><a href="/blog.php">BLOG</a></li>
                <div class="mobile-navigation-underline"></div>
                <li><a href="/contact.php">CONTACT</a></li>
            </ul>
            <div class="mobile-navigation-drop-cart" onClick="showPopup('cart');">
                <a>View your Shopping Cart (0)</a>
            </div>
            <div class="mobile-navigation-drop-account">
                <a style="color:grey" onClick="showPopup('login');">Login</a>
                <a> or </a>
                <a style="color:grey" onClick="showPopup('signup');">Sign-up</a>
            </div>
        </div>

    </div>

    <div class="desktop-navigation">
            <div class="center">
            <div id="desktop-navigation-top-center">
                <div class="desktop-navigation-cart">
                    <a id="desktop-navigation-cart-links" onClick="showPopup('cart');">Shopping Cart(0)</a>
                    <div class="desktop-navigation-div"></div>
                    <a id="desktop-navigation-cart-links" onClick="showPopup('login');">Login</a>
                    <div class="desktop-navigation-div"></div>
                    <a id="desktop-navigation-cart-links" onClick="showPopup('signup');">Sign-up</a>
                </div>
            </div>
            </div>
                <div class="desktop-navigation-container">
                <div id="desktop-navigation-top-center">
                    <a href="/">
                        <div class="desktop-navigation-logo"></div>
                    </a>
                    <div class="desktop-navigation-right">
                        <ul>
                            <li class="desktop-navigation-li"><a href="/index.php">Home</a></li>
                            <li class="desktop-navigation-div"></li>
                            <li class="desktop-navigation-li"><a href="/product.php">Shop</a></li>
                            <li class="desktop-navigation-div"></li>
                            <li class="desktop-navigation-li"><a href="/forum.php">Forum</a></li>
                            <li class="desktop-navigation-div"></li>
                            <li class="desktop-navigation-li"><a href="/blog.php">Blog</a></li>
                            <li class="desktop-navigation-div"></li>
                            <li class="desktop-navigation-li"><a href="/contact.php">Contact</a></li>
                        </ul>
                        <div class="desktop-navigation-search">
                            <a href="#" class="desktop-navigation-search-icon"><i class="fa fa-search"></i></a>
                            <input type="search" id="search" placeholder="Search..." />
                        </div>
                    </div>
                </div>
                </div>
            </div>
    </div>
</div>