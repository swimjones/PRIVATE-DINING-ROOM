

function menuOpen(){

	var mobileMenu = $("#menu-pop-up");
	var mobileMenuText = $("#navtext");

	mobileMenu.fadeIn();
	mobileMenu.removeClass("menu-closed").addClass("menu-open");
	mobileMenuText.text("private dining room");

	console.log("Menu open");
}

function menuClose(){

	var mobileMenu = $("#menu-pop-up");
	var mobileMenuText = $("#navtext");

	mobileMenu.fadeOut();
	mobileMenuText.text("navigation");
	console.log("Menu close");

}

// START HEADER HIDE // 

var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('#header').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('#header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('#header').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
