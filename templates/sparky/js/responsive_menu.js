function menutransform(){

	var topMenuContainerWidth = jQuery("div.cell").has("ul.nav").innerWidth();
	var topMenuWidth = jQuery("ul.nav").innerWidth();

	if(topMenuWidth > topMenuContainerWidth) {

		jQuery(".tinynav").css("display","block");
		jQuery("ul.nav").css("display","none");

		jQuery("ul.nav").tinyNav({
			active: 'current', // String: Set the "active" class
			header: 'Navigation', // String: Specify text for "header" and show header instead of the active item
		});

	}else{
		jQuery(".tinynav").css("display","none");
		jQuery("ul.nav").css("display","block");
	}
}

jQuery(function(){
	menutransform();
	jQuery(window).resize(menutransform);
	jQuery(window).resize(function(){
		jQuery(".tinynav").remove();
		menutransform();
	});
});