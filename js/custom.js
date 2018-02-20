$(document).ready(function(){
	
	"use strict";	
	
//------------------------------------------------------------------------
//						TESTIMONIALS SLIDER SETTINGS
//------------------------------------------------------------------------
    var owl = $("#testimonials-slider");
    owl.owlCarousel({
      	singleItem:true,
		autoPlay : 5000,
		stopOnHover:true
    });
	
	
	 
	 
//------------------------------------------------------------------------
//						INTRO SUPERSLIDER SETTINGS
//------------------------------------------------------------------------
	$("#slides").superslides({
		play: 4000,
		animation: "slide",
		pagination: false,
		inherit_height_from:".intro-media",
		inherit_width_from:".intro-media"
	});

		


	
//------------------------------------------------------------------------
//					SUBSCRIBE FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------          
    $('#subscribe_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function(error, element) {
            error.appendTo( element.closest("form"));
        },
        messages: {
            email: {
                required: "We need your email address to contact you",
                email: "Please, enter a valid email"
            }
        },
					
        highlight: function(element) {
            $(element)
        },                    
					
        success: function(element) {
            element
            .text('').addClass('valid')
        }
    }); 
	

		
				
//------------------------------------------------------------------------------------
//						SUBSCRIBE FORM MAILCHIMP INTEGRATIONS SCRIPT
//------------------------------------------------------------------------------------		
    $('#subscribe_form').submit(function() {
        $('.error').hide();
        $('.error').fadeIn();
        // submit the form
        if($(this).valid()){
            $('#subscribe_submit').button('loading'); 
            var action = $(this).attr('action');
            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    newsletter_email: $('#subscribe_email').val()
                },
                success: function(data) {
                    $('#subscribe_submit').button('reset');
					
					//Use labels to display messages
                    //$('.error').html('Well done! You are subscribed!');
					
					//Redirect to other site
                    //window.location.href = "http://yoursite.com";
					
					//Use modal popups to display messages
					$('#modalSubscribe .modal-title').html('<i class="color2 icon-newspaper"></i>' + data);
					$('#modalSubscribe').modal('show');
					
                },
                error: function() {
                    $('#subscribe_submit').button('reset');
					
                    //Use labels to display messages
                   	//$('.error').html('Oops! Something went wrong!');
					
					//Redirect to other site
                    //window.location.href = "http://yoursite.com";
					
					//Use modal popups to display messages
					$('#modalSubscribe .modal-title').html('<i class="color2 icon-caution"></i>Oops!<br>Something went wrong!');
					$('#modalSubscribe').modal('show');
					
                }
            });
        // return false to prevent normal browser submit and page navigation 
        }
        return false; 
    });
	  
	


//------------------------------------------------------------------------------------
//						CONTACT FORM VALIDATION'S SETTINGS
//------------------------------------------------------------------------------------		  
    $('#contact_form').validate({
        onfocusout: false,
        onkeyup: false,
        rules: {
            name: "required",
            email: {
                required: true,
                email: true
            }
        },
        errorPlacement: function(error, element) {
            error.insertBefore(element);
        },
        messages: {
            name: "What's your name?",
            email: {
                required: "What's your email?",
                email: "Please, enter a valid email"
            }
        },
					
        highlight: function(element) {
            $(element)
            .text('').addClass('error')
        },                    
					
        success: function(element) {
            element
            .text('').addClass('valid')
        }
    });   




//------------------------------------------------------------------------------------
//								CONTACT FORM SCRIPT
//------------------------------------------------------------------------------------	
	
    $('#contact_form').submit(function() {
        // submit the form
        if($(this).valid()){
            $('#contact_submit').button('loading'); 
            var action = $(this).attr('action');
            $.ajax({
                url: action,
                type: 'POST',
                data: {
                    contactname: $('#contact_name').val(),
                    contactemail: $('#contact_email').val(),
					contactmessage: $('#contact_message').val()
                },
                success: function() {
                    $('#contact_submit').button('reset');
					
					//Use button to display messages
                    //$('#contact_submit').button('complete');
					
					//Redirect to other site
                    //window.location.href = "http://yoursite.com";
					
					//Use modal popups to display messages
					$('#modalContact .modal-title').html('<i class="color2 icon-bike"></i>Well done!<br>Your message has been successfully sent!');
					$('#modalContact').modal('show');
                },
                error: function() {
                    $('#contact_submit').button('reset');
					
					//Use button to display messages
                    //$('#contact_submit').button('error');
					
					//Redirect to other site
                    //window.location.href = "http://yoursite.com";
					
					//Use modal popups to display messages
					$('#modalContact .modal-title').html('<i class="color2 icon-caution"></i>Oh no!<br>Something went wrong!');
					$('#modalContact').modal('show');
                }
            });
        // return false to prevent normal browser submit and page navigation 
        } else {
            $('#contact_submit').button('reset')
        }
        return false; 
    }); 
	
});