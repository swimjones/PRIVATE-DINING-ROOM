$(
	function(){
		var phrases = ["No one is paying attention to you.", "No one is listening.", "No one has the information.", "PRIVATE DINING ROOM" ]
		for (var i = 0; i <= 3; i++) {
			console.log(phrases[i]);
		}
	}
);


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
