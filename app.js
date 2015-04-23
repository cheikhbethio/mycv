(function($){

	$("#header__icon").click(function(e){
		e.preventDefault();
		$("body").toggleClass('with--sidebar');
	});

	$("#site-cache").click(function(e){
		e.preventDefault();
		$('body').toggleClass('with--sidebar');
	});


})(jQuery);