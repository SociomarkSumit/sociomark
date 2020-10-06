<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php
	$title="Foresight Opticals";
	$description="";
	$url="";
	$keywords="";
	$image="";
	require APPPATH.'views/layout/head.php';?>
</head>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
<div data-dsn-temp="light"></div>
<div class="preloader">
	<div class="preloader-after"></div>
	<div class="preloader-before"></div>
	<div class="preloader-block">
		<div class="title">Foresight Opticals</div>
		<div class="percent">0</div>
		<div class="loading">loading...</div>
	</div>
	<div class="preloader-bar">
		<div class="preloader-progress"></div>
	</div>
</div>

<?php require APPPATH.'views/layout/header.php';?>

<main class="main-root">
	<div id="dsn-scrollbar">
		<div class="dsn-slider demo3" data-dsn-header="project">
			<div class="dsn-root-slider" id="dsn-hero-parallax-img">
				<div class="slide-inner">
					<div class="swiper-wrapper">
						<div class="slide-item swiper-slide">
							<div class="slide-content">
								<div class="slide-content-inner" style="display: none">
									<div class="title-text-header">
										<div class="title-text-header-inner">
											<a href="#" class="effect-ajax" data-dsn-ajax="slider">
											</a>
										</div>
									</div>


								</div>
							</div>
							<div class="image-container">
								<div class="image-bg cover-bg" data-image-src="<?php echo base_url('assets/img/work/foresight-opticals-branding/1.jpg');?>"
									 data-overlay="5">
									<img src="<?php echo base_url('assets/img/work/foresight-opticals-branding/1.jpg');?>" alt="">
									<div class="cap">
										<span>Foresight Opticals</span>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>

			<section class="footer-slid" id="descover-holder">
				<div class="control-num">
					<span class="sup active">01</span>
				</div>
				<div class="control-nav">
					<div class="prev-container" data-dsn="parallax">
						<svg viewBox="0 0 40 40">
							<path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
							<polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
						</svg>
					</div>

					<div class="next-container" data-dsn="parallax">
						<svg viewBox="0 0 40 40">
							<path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
							<polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
						</svg>
					</div>
				</div>
			</section>

		</div>

		<div class="wrapper">

			<section class="our-work work-under-header  section-margin" data-dsn-col="3">
				<div class="container">
					<div class="one-title">

						<h2 class="title-main work-title">Foresight Opticals</h2>
					</div>
				</div>
				<div class="container">
					<p class="item-client"><strong>About the Brand:</strong> They are the first ISO certified optical company with over 15 outlets. They guarantee latest elite fashion with over 100+ international brands of luxury eye wear, lenses and frames.</p>
					<p class="item-client"><strong>Services Offered:</strong> Social media Management, Content Writing, Social media Ads, Script Writing, Graphic Designs with 2D Animated Videos, ORM, Offline branding – Print Ads, Standee, In store branding includes - Flyers, Danglers, Brochure, Product sheet etc.</p>


				</div>
			</section>

			<?php require APPPATH.'views/layout/footer.php';?>
		</div>
</main>

<?php require APPPATH.'views/layout/js.php';?>
</body>
</html>
