<link rel="icon" href="resources/img/icon/favicon.ico">
<link rel="stylesheet" type="text/css" href="resources/uikit/css/uikit.min.css">
<link rel="stylesheet" href="resources/plugin/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="resources/plugin/lightslider-master/dist/css/lightslider.min.css">
<link rel="stylesheet" href="resources/plugin/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="resources/plugin/OwlCarousel2-2.3.4/dist/assets/owl.theme.green.min.css">
<link rel="stylesheet" href="resources/plugin/lightslider-master/dist/css/lightslider.min.css">
<link rel="stylesheet" href="resources/plugin/xZoom/dist/xzoom.css">
<link rel="stylesheet" href="resources/libary/css/reset.css">
<link rel="stylesheet" href="resources/style.css">
<script src="resources/libary/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="resources/uikit/js/uikit.min.js" type="text/javascript"></script>
<script src="resources/uikit/js/uikit-icons.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	(function($) {
		$.fn.clickToggle = function(func1, func2) {
			var funcs = [func1, func2];
			this.data('toggleclicked', 0);
			this.click(function() {
				var data = $(this).data();
				var tc = data.toggleclicked;
				$.proxy(funcs[tc], this)();
				data.toggleclicked = (tc + 1) % 2;
			});
			return this;
		};
	}(jQuery));
</script>