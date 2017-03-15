
// opening and closing nav menu

function navlistopen(){
	var nav = document.getElementById("nav_content");
	if(nav.className === "nav_list"){
		nav.className += " open";
	} else {
		nav.className = "nav_list";
	}
}

function navlistclose(){
	var nav = document.getElementById("nav_content");
	nav.className = "nav_list";
}

// begin hidden menu






