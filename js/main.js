var mainJquery = jQuery.noConflict();

mainJquery( document ).ready(function($) {

    $mobileNavOpen = false;
    $showDescription = false;
    $showTerms = false;
    

    $(".mobile-navigation-btn").click(function() {
    	if($mobileNavOpen === false){
    		openMobileNav();
    	}
    	else{
    		closeMobileNav();
    	}
	});

    window.closeMobileNav = function(){
        $(".mobile-navigation-drop").css('display', 'none');
            $(".mobile-navigation-logo").css('background-image', 'url("/img/main-logo.png")');
            $(".mobile-navigation-btn").removeClass("open");
            $(".mobile-navigation").css('background-color', '#212121');
            $(".mobile-navigation").css('border-bottom', 'none');
            $(".filter").css('display','none');
            $("body").css('overflow-x','hidden');
            $("body").css('height','auto');
            $("body").css('overflow-y','scroll');
            $mobileNavOpen = false;
    }
    window.openMobileNav = function(){
        $(".mobile-navigation-drop").css('display', 'block');
            $(".mobile-navigation-logo").css('background-image', 'url("/img/main-logo-inverted.png")');
            $(".mobile-navigation-btn").addClass("open");
            $(".mobile-navigation").css('background-color', 'white');
            $(".filter").css('display','block');
            $("body").css('overflow-x','hidden');
            $("body").css('overflow-y','hidden');
            $(".mobile-navigation").css('border-bottom', 'solid 1px lightgrey');
            $("body").css('height','100vh');
            $mobileNavOpen = true;
    }


    $("#footer span i").hover(function() { // Mouse over
        $(this).siblings().stop().fadeTo(300, 0.6);
        $(this).parent().siblings().stop().fadeTo(300, 0.3); 
    }, function() { // Mouse out
        $(this).siblings().stop().fadeTo(300, 1);
        $(this).parent().siblings().stop().fadeTo(300, 1);
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

    function Get(yourUrl){
        var Httpreq = new XMLHttpRequest(); // a new request
        Httpreq.open("GET",yourUrl,false);
        Httpreq.send(null);
        return Httpreq.responseText;
    }

    // var json_obj = JSON.parse(Get('http://juan.local:8080/api?model=Product'));
    // console.log("this is the author name: "+Object.values(json_obj[0]));
});