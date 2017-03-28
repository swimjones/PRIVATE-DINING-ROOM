console.log("The future is out there!");

// START CLOSING + OPENING NAV MENU // ---------------------->
function bye_menu() {
    $("#header ul").removeClass(".show_menu").addClass(".no_menu");
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
        $('#header').show();
    } else {
        if(st + $(window).height() < $(document).height()) {
            $('#header').hide();
        }
    }
    
    lastScrollTop = st;
}


// END HIDE MENU ON SCROLL // ---------------------->



