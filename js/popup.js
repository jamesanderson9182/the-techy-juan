var popupScripts = jQuery.noConflict();

popupScripts( document ).ready(function($) {
	

	$contentHeight = $("#popup").height() - $("#popup-title-container").height();
	//console.log($contentHeight);
	$("#popup-content").css('height', $contentHeight);
	
	$(".popup-exit").click(function(){
		$(".popup-container").hide();
	});

	window.showPopup = function($popupName){
		$popupLink = "popup-" + $popupName;
		var $popupID = document.getElementById($popupLink);
		console.log("Opening popup for " + $('body').height());
		$('.popup-container').css('height', $('body').height());
		$($popupID).css('display','block');
		$('.popup').css('background-color','red');
		var $popupName;
	}

});