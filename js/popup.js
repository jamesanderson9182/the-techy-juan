var popupScripts = jQuery.noConflict();

popupScripts( document ).ready(function($) {
	$contentHeight = $("#popup").height() - $("#popup-title-container").height();
	console.log($contentHeight);
	$("#popup-content").css('height', $contentHeight);
});