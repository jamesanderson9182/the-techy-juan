var mainJquery = jQuery.noConflict();

mainJquery( document ).ready(function($) {

    $mobileNavOpen = false;
    $showDescription = false;
    $showTerms = false;
    

    $(".mobile-navigation-btn").click(function() {

    	if($mobileNavOpen === false){
    		$(".mobile-navigation-drop").css('display', 'block');
    		$(".mobile-navigation-logo").css('background-image', 'url("img/main-logo-inverted.png")');
    		$(".mobile-navigation-btn").css('background-image', 'url("img/navigation-btn.png")');
    		$(".mobile-navigation").css('background-color', 'white');
    		$(".filter").css('display','block');
    		$("body").css('overflow-x','hidden');
    		$("body").css('overflow-y','hidden');
    		$(".mobile-navigation").css('border-bottom', 'solid 1px lightgrey');
    		$("body").css('height','100vh');
    		$mobileNavOpen = true;
    	}
    	else{
    		$(".mobile-navigation-drop").css('display', 'none');
    		$(".mobile-navigation-logo").css('background-image', 'url("img/main-logo.png")');
    		$(".mobile-navigation-btn").css('background-image', 'url("img/navigation-btn-inverted.png")');
    		$(".mobile-navigation").css('background-color', '#212121');
    		$(".mobile-navigation").css('border-bottom', 'none');

    		$(".filter").css('display','none');
    		$("body").css('overflow-x','hidden');
    		$("body").css('height','auto');
    		$("body").css('overflow-y','scroll');
    		$mobileNavOpen = false;
    	}
    	
	});
	$(".product-page-description-show").click(function() {

    	if($showDescription === false){
    		
    		$(".product-page-description").css('max-height','5000px');
    		$('.product-page-description-show a').text('Show less');
    		$showDescription = true;
    	}
    	else{
    		$(".product-page-description").css('max-height','200px');
    		$('.product-page-description-show a').text('Show more');
    		$showDescription = false;
    	}
    	
	});

	$(".terms-and-privacy").click(function() {
    	$(".terms").css('display','block');
    	$('html,body').scrollTop(0);
	});
	$(".terms-close").click(function() {
    	$(".terms").css('display','none');
	});

    function Get(yourUrl){
        var Httpreq = new XMLHttpRequest(); // a new request
        Httpreq.open("GET",yourUrl,false);
        Httpreq.send(null);
        return Httpreq.responseText;
    }

    // var json_obj = JSON.parse(Get('http://juan.local:8080/api?model=Product'));
    // console.log("this is the author name: "+Object.values(json_obj[0]));
});