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
        return false; 
    }
}

// START CLOSING + OPENING NAV MENU // ---------------------->

// START HIDE MENU ON SCROLL // ---------------------->

var didScroll;
var lastScrollTop 	= 0; 
var navbarHeight 	= 60;
var delta 			= 5;

console.log(navbarHeight); 

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
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $("#header").removeClass('default').addClass('slide_up');
        $("#header img").css("display","none");
        $("#header ul").removeClass("show_menu").addClass("no_menu");
    } else {
        if(st + $(window).height() < $(document).height()) {
            $("#header").removeClass('slide_up').addClass('default');
            $("#header img").css("display","block");

            if(($("#header ul").hasClass("no_menu")) && ($("#header").hasClass("default"))){
                $("#header img").attr("src", themePath + "resources/svg/menu_pipes.svg");
            }
    }
}
    
    lastScrollTop = st;
}


// END HIDE MENU ON SCROLL // ---------------------->



