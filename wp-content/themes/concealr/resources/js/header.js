// START HIDE MENU ON SCROLL // ---------------------->

var didScroll;
var lastScrollTop 	= 0; 
var navbarHeight 	= 60;
var delta 			= 5;

$(window).scroll(function(event){
	didScroll = true;
});

// interval set to check status of menu
setInterval(function(){
	if(didScroll){
		hasScrolled();
		didScroll = false;
	}
}, 250)

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // user must scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // if scrolled down and past navbar, add slide_up class to hide
    if (st > lastScrollTop && st > navbarHeight){

        // scroll Down
        $("#header").removeClass('default').addClass('slide_up');

        // used to keep svg from floating onscreen
        $("#header img").css("display","none"); 
        $("#header ul").removeClass("show_menu").addClass("no_menu");
    } else {
            if(st + $(window).height() < $(document).height()) {

                // scroll up
                $("#header").removeClass('slide_up').addClass('default');
                $("#header img").css("display","block");

                // changes menu svg back to normal if menu open while scroll up
                if(($("#header ul").hasClass("no_menu")) && ($("#header").hasClass("default"))){
                    $("#header img").attr("src", themePath + "resources/svg/menu_pipes.svg");
                }
            }
        }
    lastScrollTop = st;
    // set last scroll to new scroll_top
}

// END HIDE MENU ON SCROLL // ---------------------->
