"use strict";
jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
  
//********** SEARCH BAR TRANSFORMATION


	$('a[href="#search"]').on('click',function(event) {    
		event.preventDefault();                
		$('#search').addClass('open');
		$('.testclass').focus();

	});            
	$('#search, #search button.close').on('click keyup', function(event) {
		if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
		$(this).removeClass('open');
	}
});            

// *********  SEARCH BAR TRANSFORMATION ENDS




// *********  GALLERY 


	$('.portfolio li').on('click', function(event){
		$(this).toggleClass('active');
	});
	

	$('.burger').on('click', function(event){
		$('.navigation_bar').toggleClass('active-menu');
	});


});







