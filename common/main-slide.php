<div class="uk-container">
	<div uk-slideshow="max-height: 400;autoplay:true;autoplay-interval:3000;animation:slide" class="main-slide">
		<div class="uk-position-relative uk-visible-toggle uk-light">
			<ul class="uk-slideshow-items slide-show">
				<?php for ($i=1; $i < 2; $i++) { ?>
					<li>
						<img src="resources/img/uploads/slide-<?php echo $i;?>.png" alt="" uk-cover>
					</li>
				<?php } ?>
			</ul>

			<a class="uk-position-center-left uk-position-small uk-hidden-hover slide-previous" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
			<a class="uk-position-center-right uk-position-small uk-hidden-hover slide-next" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
		</div>
	</div>
</div>
