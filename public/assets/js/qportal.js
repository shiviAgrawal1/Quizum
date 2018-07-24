$(document).ready(function(){
	
	$(".tile-heads-question").click(function(){
		
		$(".tile-heads-question").each(function(){
			$(this).removeClass("tile-active orange z-depth-2");
		});
		
		$(this).addClass("tile-active orange z-depth-2");
	});

	$("section").hide();
	$("section.active").show();

	$(".next").click(function(){
		$("section").hide();
		$next = $("section.active").next("section");
		if($next == null) reurn;
		else{
			$next.show();
			$("section.active").removeClass("active");
			$next.addClass("active");
		}
	});
	
	$(".previous").click(function(){
		$("section").hide();
		$prev = $("section.active").prev("section");
		if($prev == null) reurn;
		else{
			$prev.show();
			$("section.active").removeClass("active");
			$prev.addClass("active");
		}
	});


});