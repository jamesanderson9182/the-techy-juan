<head>
	<script type="text/javascript" src="js/popup.js"></script>
</head>
<?php
    if (isset($_GET['popup'])){
        $curPopup = "popup/" . htmlspecialchars($_GET["popup"]) . ".php";
        if(file_exists($curPopup)){
        	?>
        	<style type="text/css">body{overflow:hidden;height:100vh;}</style>
        	<div id="popup-container">
        	<div id="popup">
        	<a href="/index.php">
        	<i id="popup-exit" class="fa fa-times fa-2x" aria-hidden="true"></i>
        	</a>
        	<?php
        	include $curPopup;
        	?>
      		</div>
      		</div>
        	<?php
        }
    	}
?>