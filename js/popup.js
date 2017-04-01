var popupScripts = jQuery.noConflict();

popupScripts( document ).ready(function($) {
	
	
	$(".popup-exit").click(function(){
		$(".popup-container").hide();
	});

	window.showPopup = function($popupName){
		$('html, body').scrollTop(0);
		closeMobileNav();
		$popupLink = "popup-" + $popupName;
		var $popupID = document.getElementById($popupLink);
		$('.popup-container').css('height', $('body').height());
		$($popupID).css('display','block');
		$contentHeight = $(".popup").height() - 50;
		$(".popup-content").css('height', $contentHeight);
		var $popupName;
	}

});