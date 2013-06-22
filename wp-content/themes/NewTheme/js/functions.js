// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){

	/*
$('#banner ul').cycle({
		//containerResize: 0,
		//width: '100%',
		//slideResize: 0,
		pager: '#slide-nav',
		//timeout: 0,
		swipe: true,
		fx: 'scrollHorz'
	});
*/
	
	$('.gform_fields input, .gform_fields textarea').each(function(){
		if($(this).val() != "") {
			$('label[for=' + $(this).attr("id") + ']').css('display', 'none');
		}
	});
		
		
	$('.gform_fields input, .gform_fields textarea').focus(function(){
		if($(this).val() == "") { $('label[for=' + $(this).attr("id") + ']').fadeTo('slow', 0); }  
	}).blur(function(){
		if($(this).val() == "") { $('label[for=' + $(this).attr("id") + ']').fadeTo('fast', 100); }
	});
	
	if(jQuery(".mobile-nav-wrap").css('display') != 'none') {
		jQuery(".show-menu").click(function(){
			$('#nav').slideToggle(
				'slow'/*
,
				function() {
			    if(jQuery('.arrow').hasClass('up')) {
			    	jQuery('.arrow').removeClass('up');
			    	jQuery('.arrow').addClass('down');
			    }else{
			    	jQuery('.arrow').addClass('up');
			    	jQuery('.arrow').removeClass('down');
			    }
			  }
*/
			 );	
		});
	}


});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/