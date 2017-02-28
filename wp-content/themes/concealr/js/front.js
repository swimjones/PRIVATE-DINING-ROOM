$(
	function(){
		var phrases = ["No one is paying attention to you.", "No one is listening.", "No one has the information.", "PRIVATE DINING ROOM" ]
		for (var i = 0; i <= 3; i++) {
			console.log(phrases[i]);
		}
	}
);

function navlistopen(){
	var a = document.getElementById("nav_content");
	if(a.className === "nav_list"){
		a.className += " open";
	} else {
		a.className = "nav_list";
	}
}


