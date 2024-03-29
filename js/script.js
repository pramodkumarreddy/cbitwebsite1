// <![CDATA[
$(function() {

  // Slider
  $('#coin-slider').coinslider({width:960,height:399,opacity:1});

  // Radius Box
  $('.article a.com').css({"border-radius":"16px", "-moz-border-radius":"16px", "-webkit-border-radius":"16px"});
  $('.post_content a.rm, .content p.pages span, .content p.pages a').css({"border-radius":"6px", "-moz-border-radius":"6px", "-webkit-border-radius":"6px"});
  //$('.article a.com').css({"border-top-right-radius":"10px", "border-bottom-right-radius":"10px", "-moz-border-radius-topright":"10px", "-moz-border-radius-bottomright":"10px", "-webkit-border-top-right-radius":"10px", "-webkit-border-bottom-right-radius":"10px"});
  //$('.content p.pages span, .content p.pages a').css({"border-radius":"16px", "-moz-border-radius":"16px", "-webkit-border-radius":"16px"});
  $('.menu_nav ul').css({"border-top-left-radius":"10px", "border-bottom-left-radius":"10px", "-moz-border-radius-topleft":"10px", "-moz-border-radius-bottomleft":"10px", "-webkit-border-top-left-radius":"10px", "-webkit-border-bottom-left-radius":"10px"});
  $('p.infopost, .content .sidebar h2').css({"border-top-left-radius":"6px", "border-bottom-left-radius":"6px", "-moz-border-radius-topleft":"6px", "-moz-border-radius-bottomleft":"6px", "-webkit-border-top-left-radius":"6px", "-webkit-border-bottom-left-radius":"6px"});
  $('.searchform, .content .sidebar .gadget, .content .mainbar .article, .content p.pages').css({"border-top-left-radius":"10px", "border-top-right-radius":"10px", "-moz-border-radius-topleft":"10px", "-moz-border-radius-topright":"10px", "-webkit-border-top-left-radius":"10px", "-webkit-border-top-right-radius":"10px"});

});	

// Cufon
Cufon.replace('h1, h2, h3, h4, h5, h6, .article a.com, .post_content a.rm, .menu_nav ul li a', { hover: true });
//Cufon.replace('h1', { color: '-linear-gradient(#fff, #ffaf02)'});
//Cufon.replace('h1 small', { color: '#8a98a5'});

// ]]>


$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});

		