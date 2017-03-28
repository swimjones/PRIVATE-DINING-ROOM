console.log("The future is out there!");

var themePath = "http://privatediningroom/wp-content/themes/concealr/";

// START CLOSING + OPENING NAV MENU // ---------------------->

function bye_menu() {
    if($("#header ul").hasClass("show_menu")){
        $("#header img").attr("src", themePath + "resources/svg/menu_pipes.svg");
        $("#header ul").removeClass("show_menu").addClass("no_menu");
        return false;
    } else {
        $("#header ul").removeClass("no_menu").addClass("show_menu");
        $("#header img").attr("src", themePath + "resources/svg/menu_close.svg");
    }
}

// START CLOSING + OPENING NAV MENU // ---------------------->

// START HIDE MENU ON SCROLL // ---------------------->

var didScroll;
var lastScrollTop 	= 0; 
var navbarHeight 	= $("#header").outerHeight();
var delta 			= 5; 

$(window).scroll(function(event){
	didScroll = true;
})

setInterval(function(){
	if(didScroll){
		hasScrolled();
		didScroll = false;
	}
}, 250)

function hasScrolled() {
    var st = $(this).scrollTop();
    
    if(Math.abs(lastScrollTop - st) <= delta)
        return;

    if (st < lastScrollTop){
        $('#header').removeClass("slide_up").addClass("default");
    } else {
        if(st + $(window).height() < $(document).height()) {
            $('#header').removeClass("default").addClass("slide_up");
        }
    }
    
    lastScrollTop = st;
}


// END HIDE MENU ON SCROLL // ---------------------->



