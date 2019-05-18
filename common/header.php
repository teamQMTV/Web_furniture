<header class="header">
	<?php
	$menu = array(
		array('title' => 'Trang chủ'),
		array('title' => 'Giới thiệu'),
		array('title' => 'Dịch vụ'),
		array('title' => 'Gửi mẫu'),
		array('title' => 'Hợp tác'),
		array('title' => 'Tin tức'),
		array('title' => 'Liên hệ')
	)
	?>
	<?php $menu[1]['post'] = ['sản phẩm 1', 'sản phẩm 2', 'sản phẩm 3']; ?>
	<?php //print_r($menu) ?>

	<section class="pc-head uk-visible@m">
		
	</section>
	<section class="mobile-header uk-hidden@m">
		<div class="uk-flex uk-flex-between uk-flex-middle mobile-middle">
			<button class="uk-button uk-button-default btn-menu-mobile" uk-icon="icon: menu" type="button"
			uk-toggle="target: #menu-mobile"></button>
			<h1 class="logo"><a href="." title="Trang chủ"><img src="resources/img/uploads/logo.png"
				alt="Trang chủ"></a></h1>
				<section class="cart-mobile">
					<a href="" title="" class="uk-button btn-cart-mobile"
					uk-icon="icon: cart; ratio: 1.5"><span>0</span></a>
				</section>
			</div>
			<section class="mobile-search">
				<form action="" method="get" accept-charset="utf-8" class="uk-flex uk-flex-stretch search-form">
					<input type="text" name="keyword" class="uk-input seacrh-keyword" placeholder="Tìm kiếm">
					<button type="submit" class="uk-button btn-mobile-search" uk-icon="icon: search; ratio: 1"></button>
				</form>
			</section>
		</section>
</header><!-- /header -->