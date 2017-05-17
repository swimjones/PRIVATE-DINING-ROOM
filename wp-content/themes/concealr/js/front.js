

function menuOpen(){

	var mobileMenu = $("#menu-pop-up");
	var mobileMenuText = $("#navtext");

	mobileMenu.fadeIn();
	mobileMenu.removeClass("menu-closed").addClass("menu-open");
	//mobileMenuText.text("&#9776;");

	console.log("Menu open");
}

function menuClose(){

	var mobileMenu = $("#menu-pop-up");
	var mobileMenuText = $("#navtext");

	mobileMenu.fadeOut();
	//mobileMenuText.text("navigation");
	console.log("Menu close");

}
