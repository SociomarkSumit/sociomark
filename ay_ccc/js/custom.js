
$(document).ready(function(){
	$(".loader_overlay").fadeOut();
});

 
$(document).ajaxStart(function(){
 // Show image container
 $(".loader_overlay").show();
});

$(document).ajaxComplete(function(){
 // Hide image container
 $(".loader_overlay").hide();
});