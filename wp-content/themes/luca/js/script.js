$(window).load(function() {
    $('.main-slider').unslider({
    	dots: true
    });
    $('.text-slider').unslider({
    	dots: true
    });
	$( "#tabs" ).tabs({
		show: { effect: "fade", duration: 800 },
		 activate: function( event, ui ) {}
	}); 
	if($(window).width() <= 1200){
		$("#screen-resolution").modal("show");
	}
});
$(document).ready(function(){
	$("#tabs").on( "tabsactivate", function( event, ui ) {
		if($("#design-2").is(":visible")){
			$(".design-rating").find(".bar").animate({width: "80%"}, 1000);
			$(".price-rating").find(".bar").animate({width: "85%"}, 1000);
			$(".safety-rating").find(".bar").animate({width: "90%"}, 1000);
		}
	});	
});
