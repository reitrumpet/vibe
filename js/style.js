
var zero = 0;
// document.write zero;
$(document).ready(function(){
	$(window).on('scroll', function(){
		$('.navbar').toggleClass('hide', $(window).scrollTop() > zero);
		zero = $(window).scrollTop();
	})
})
