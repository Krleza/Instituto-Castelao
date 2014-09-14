( function( $ ) {
$( document ).ready(function() {
$('#cssmenu').prepend('<div id="menu-button">Instituto Castelao</div>');
	$('#cssmenu #menu-button').on('click', function(){
		var menu = $(this).next('ul');
                var sub = $(this).next('li')
		if (menu.hasClass('open')) {
			menu.removeClass('open');
		}
                else{
                    menu.addClass('open');
                }
                        
	});
});
} )( jQuery );

//slide primer nivel

$(function(){
	$('#slidemenu li a').click(function(event){
		var elem = $(this).next();
		if(elem.is('ul')){
			event.preventDefault();
			$('#slidemenu ul:visible').not(elem).slideUp();
			elem.slideToggle();
		}

	});

});

