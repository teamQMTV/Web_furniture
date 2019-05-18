$(window).scroll(function() {
	if($(this).scrollTop() > 50) $('#backtop').stop().animate({ bottom: '10px' }, 200);
	else $('#backtop').stop().animate({ bottom: '-60px' }, 200);
});
$(document).ready(function() {
	$('#backtop').click(function(event) {
		event.preventDefault();
		$('html, body').animate({scrollTop: 0},500);
	});
	if (window.location.pathname !== '/' && window.location.pathname !== "/home"){
		$('.catalogue-menu').addClass('active');
	}
	$(".xzoom").xzoom({position:'right'})
});
$(document).ready(function() {
	$('#vertical').lightSlider({
		gallery:true,
		item:1,
		vertical:true,
		verticalHeight:400,
		vThumbWidth:90,
		thumbItem:4,
		thumbMargin:10,
		slideMargin:0
	});
});
$(document).on('click', '[data-url]', function(){
	window.location.assign($(this).attr('data-url'))
})