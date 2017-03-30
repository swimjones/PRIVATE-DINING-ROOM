// START CLOSING + OPENING NAV MENU // ---------------------->

var themePath = "http://privatediningroom/wp-content/themes/concealr/";

function bye_menu() {
    if($("#header ul").hasClass("show_menu")) {
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
