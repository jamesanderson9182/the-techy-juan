<head>
	<script type="text/javascript" src="js/popup.js"></script>
</head>
    
    <div id="popup-terms" class="popup-container">
        <div class="popup">
        <a class="popup-exit-container" href="/index.php">
            <i class="popup-exit fa fa-times fa-2x" aria-hidden="true"></i>
        </a>
            	<?php
            	include "terms.php";
            	?>
        </div>
    </div>
    <div id="popup-login" class="popup-container">
        <div class="popup">
        <a class="popup-exit-container" href="/index.php">
            <i class="popup-exit fa fa-times fa-2x" aria-hidden="true"></i>
        </a>
                <?php
                include "login.php";
                ?>
        </div>
    </div>
    <div id="popup-signup" class="popup-container">
        <div class="popup">
        <a class="popup-exit-container" href="/index.php">
            <i class="popup-exit fa fa-times fa-2x" aria-hidden="true"></i>
        </a>
                <?php
                include "signup.php";
                ?>
        </div>
    </div>
    <div id="popup-cart" class="popup-container">
        <div class="popup">
        <i class="popup-exit fa fa-angle-double-right fa-2x" aria-hidden="true"></i>
                <?php
                include "cart.php";
                ?>
        </div>
    </div>