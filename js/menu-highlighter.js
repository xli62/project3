
$("nav a").each( function() {
	
		if (this.href == window.location.href) {
		$(this).addClass("current");
	}
});