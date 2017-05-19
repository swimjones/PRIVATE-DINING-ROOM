function menuOpen(){
	var mobileMenu = $("#menu-pop-up");
	var mobileMenuText = $("#navtext");
	mobileMenu.fadeIn();
	mobileMenu.removeClass("menu-closed").addClass("menu-open");
}

function menuClose(){
	var mobileMenu = $("#menu-pop-up");
	var mobileMenuText = $("#navtext");
	mobileMenu.fadeOut();
}