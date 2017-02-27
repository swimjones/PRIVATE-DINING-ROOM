$(
	function(){
		var phrases = ["No one is paying attention to you.", "No one is listening.", "No one has the information.", "PRIVATE DINING ROOM" ]
		for (var i = 0; i <= 3; i++) {
			console.log(phrases[i]);
		}

		$("nav").click(function(){
			$(".topnav").css("display","block");
		})		
	
	}
);

