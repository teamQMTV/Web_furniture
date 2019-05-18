<?php require_once 'common/main-slide.php'; ?>
<main id="homepage" class="homepage">
	<div class="homepage-countdown">
		<div class="uk-container">
			<div class="uk-grid uk-grid-collapse">
				<div class="uk-width-expand">
					<div class="bn1">
						<div class="slogan">
							<a href="tel:0919 098 886" title="">BEPNHAPKHAUCHAUAU.COM - HOTLINE:  0919 098 886</a>
						</div>
					</div>
				</div>
				<div class="uk-width-1-4@l uk-width-1-3@m">
					<div class="count-down uk-flex uk-flex-stretch">
						<div class="cd-element">
							<span class="data" data-d></span>
							<span class="type" >
								Ngày
							</span>
						</div>
						<div class="cd-element">
							<span class="data" data-h></span>
							<span class="type" >
								Giờ
							</span>
						</div>
						<div class="cd-element">
							<span class="data" data-m></span>
							<span class="type" >
								Phút
							</span>
						</div>
						<div class="cd-element">
							<span class="data" data-s></span>
							<span class="type" >
								Giây
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- ./homepage-countdown -->

	<div class="homepage-partner">
		<div class="uk-container">
			<div class="owl-carousel owl-theme partner-slide hslide-1">
				<?php for ($i=1; $i < 20; $i++) { ?>
					<div class="item">
						<a href="" title="" class="img img-scaledown"><img src="resources/img/uploads/ptn-<?php echo rand(1,8) ?>.png" alt=""></a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div><!-- ./homepage-partner -->

	<div class="homepage-hot">
		<div class="uk-container">
			<div class="panel-head-1">
				<div class="heading">
					<a href="" title="">SẢN PHẨM KHUYẾN MÃI</a>
				</div>
			</div>
			<div class="panel-body">
				<div class="owl-carousel owl-theme prd-list hslide-2">
					<?php for ($i=1; $i < 20; $i++) { ?>
						<div class="item">
							<div class="prd">
								<div class="thumb" data-url="">
									<a href="" title="" class="img img-scaledown"><img src="resources/img/uploads/prdh-<?php echo rand(1,4) ?>.jpg" alt=""></a>
									<div class="sale">
										<span>48%</span>
									</div>
									<div class="tool">
										<a href="" title="" class="uk-button btn-over-prd view"></a>
										<a href="" title="" class="uk-button btn-over-prd cart"></a>
									</div>
								</div>
								
								<div class="info">
									<h3 class="title"><a href="" title="">Giá bát nâng hạ inox G160 – Phụ kiện tủ bếp GROB</a></h3>
									<div class="price">
										<div class="old">8.100.000 đ</div>
										<div class="news">4.200.000 đ / Bộ</div>
									</div>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<section class="homepage-product mb35">
		<div class="uk-container">
			<div class="panel-head-1">
				<div class="heading uk-flex uk-flex-between" style="background-image: url(resources/img/icon/i1.png)">
					<a href="" title="">Tủ bếp</a>
					<ul class="catalogue-child uk-flex">
						<li><a href="" title="">Blum</a></li>
						<li><a href="" title="">Blum</a></li>
						<li><a href="" title="">Blum</a></li>
					</ul>
				</div>

			</div>
			<div class="panel-body">
				<div class="uk-flex">
					<div class="cate-img uk-visible@m">
						<a href="" title="" class="img img-fill"><img src="resources/img/uploads/bg2.png" alt=""></a>
					</div>
					<div class="cate-item">
						<div class="prd-list style-2">
							<div class="uk-grid uk-grid-small uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2">
								<?php for ($i=1; $i < 9; $i++) { ?>
									<div>
										<div class="prd">
											<div class="thumb" data-url="">
												<a href="" title="" class="img img-scaledown"><img src="resources/img/uploads/prdh-<?php echo rand(1,4) ?>.jpg" alt=""></a>
												<div class="sale">
													<span>48%</span>
												</div>
												<div class="tool">
													<a href="" title="" class="uk-button btn-over-prd view"></a>
													<a href="" title="" class="uk-button btn-over-prd cart"></a>
												</div>
											</div>
											<div class="info">
												<h3 class="title"><a href="" title="">Giá bát nâng hạ inox G160 – Phụ kiện tủ bếp GROB</a></h3>
												<div class="price">
													<div class="old">8.100.000 đ</div>
													<div class="news">4.200.000 đ / Bộ</div>
												</div>
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section><!-- ./homepage-product -->

	<section class="homepage-support mb35">
		<div class="uk-container">
			<div class="panel-head-2">
				<h3 class="heading"><span>tại sao chọn bepnhapkhauchauau</span></h3>
			</div>
			<div class="panel-body">
				<div class="uk-grid uk-grid-small uk-child-width-1-4@m">
					<div>
						<div class="sp-item">
							<div class="thumb">
								<a href="" title="" class="img"><img src="resources/img/uploads/i1.png" alt=""></a>
							</div>
							<div class="info">
								<h4>Đảm bảo Chất lượng</h4>
								<span>Cam kết sản phẩm chính hãng 100%</span>
							</div>
						</div>
					</div>
					<div>
						<div class="sp-item">
							<div class="thumb">
								<a href="" title="" class="img"><img src="resources/img/uploads/i2.png" alt=""></a>
							</div>
							<div class="info">
								<h4>MIỄN PHÍ VẬN CHUYỂN</h4>
								<span>Chúng tôi cam kết giao hàng trong 24h</span>
							</div>
						</div>
					</div>
					<div>
						<div class="sp-item">
							<div class="thumb">
								<a href="" title="" class="img"><img src="resources/img/uploads/i3.png" alt=""></a>
							</div>
							<div class="info">
								<h4>TƯ VẤN MIỄN PHÍ</h4>
								<span>Gọi ngay <a href="" title="">0919 098 886</a> để được tư vấn</span>
							</div>
						</div>
					</div>
					<div>
						<div class="sp-item">
							<div class="thumb">
								<a href="" title="" class="img"><img src="resources/img/uploads/i4.png" alt=""></a>
							</div>
							<div class="info">
								<h4>BẢO HÀNH CHÍNH HÃNG</h4>
								<span>Cam kết sản phẩm chính hãng 100%</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- ./homepage-support -->

	<section class="homepage-customer mb35">
		<div class="uk-container">
			<div class="panel-head-2">
				<h3 class="heading"><span>Phản hồi từ khách hàng</span></h3>
			</div>
			<div class="panel-body">
				<div class="owl-carousel owl-theme ctm-list hslide-3">
					<div class="item">
						<div class="ctm">
							<div class="thumb">
								<a href="" title="" class="img img-cover"><img src="resources/img/uploads/nv1.jpg" alt=""></a>
							</div>
							<div class="info">
								<div class="name">
									Nguyễn Thảo Linh
								</div>
								<ul class="star uk-clearfix">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="des">
									Mình cực kì cảm ơn 2 thầy giáo siêu nhiệt tình Tu Anh Pham ít tóc và Dũng Tiến Lê ngực to đến khi ngồi vào phòng thi rồi mới thấm thía hết một số lời dạy vàng ngọc...
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="ctm">
							<div class="thumb">
								<a href="" title="" class="img img-cover"><img src="resources/img/uploads/nv2.jpg" alt=""></a>
							</div>
							<div class="info">
								<div class="name">
									Nguyễn Thảo Linh
								</div>
								<ul class="star uk-clearfix">
									<li></li>
									<li></li>
									<li></li>
									<li></li>
									<li></li>
								</ul>
								<div class="des">
									Mình cực kì cảm ơn 2 thầy giáo siêu nhiệt tình Tu Anh Pham ít tóc và Dũng Tiến Lê ngực to đến khi ngồi vào phòng thi rồi mới thấm thía hết một số lời dạy vàng ngọc...
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!-- ./homepage-customer -->
</main>