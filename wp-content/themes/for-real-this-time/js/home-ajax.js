home_nav = (function($) {
	
	//No need to cache?
	$.ajaxSetup({cache:false});
	
	//When a primary nav gets clicked CAN BE SIMPLIFIED?!
	$(document).on('click', '#site-navigation a', function( event ) {
		
		//don't do what you usually do
		event.preventDefault();
		
		//take the target of that link
		var target_site=$(this).attr('href');
		
		//replace current content with a loading indicator
		$('#main').fadeOut(function(){
			$(this).remove;
		});
		$('#primary').prepend('<div class="loader">Loading...</div>');
		$('#main').remove();
		
		//load the content at the link's target main into the empty main and display
		$('#primary').load(target_site+' #main', function(){
			$('.loader').fadeOut();
			$('.loader').remove()
			$('#main').fadeIn();
		});
		//I don't know why this might be necessary atm but here it is.
		return false;
	});
})(jQuery);

port_nav = (function($) {
	$.ajaxSetup({cache:false});
	//When a post listing gets clicked (on an archive page)
	$(document).on('click', '.single-post-link', function( event ) {
		event.preventDefault();
		var target_content = $(this).attr('href');
		$('#single-container').prepend('<div class="loader">Loading...</div>');
		$('#single-container').load(target_content+' #single-content');
	});
	return false;
})(jQuery);

$(function(){
	port_nav;
	home_nav;
});