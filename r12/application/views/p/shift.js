$(document).ready(function(){
	$("content").scroll(function(){
		var x = ["about","information","blog"];
		for (var i = x.length - 1; i >= 0; i++) {
			$("a").css("color", "blue");
			$("a").attr("href"."<?php echo base_url();?>/");
		}		
	});
});