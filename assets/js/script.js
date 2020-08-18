// Menu-toggle button

      $(document).ready(function() {
      	$(".menu-icon").on("click", function() {
      		$("nav ul").toggleClass("showing");
      	});
      });

      // Scrolling Effect

      $(window).on("scroll", function() {
      	if($(window).scrollTop()) {
      		$('nav').addClass('black');
      	}

      	else {
      		$('nav').removeClass('black');
      	}
      })


$(function(){
  var $doc = $('html, body');
  $('a').click(function() {
    $doc.animate({
      scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1500);
    return false;
  });
  
   });