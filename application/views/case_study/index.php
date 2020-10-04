<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php require APPPATH.'views/layout/head.php';?>
	<style type="text/css" >
		.subtitle{
			width: 100%;
			text-align: center;
			display: block;
			font-size: 18px;
			letter-spacing: 0px;
		}
	</style>
</head>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
	<div data-dsn-temp="light"></div>
	<div class="preloader">
		<div class="preloader-after"></div>
		<div class="preloader-before"></div>
		<div class="preloader-block">
			<div class="title">Case Study</div>
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

			<header>
				<div class="headefr-fexid" data-dsn-header="project">
					<div class="bg w-100" id="dsn-hero-parallax-img" data-dsn-ajax="img">
						<div class="bg-image  cover-bg" data-overlay="4" data-image-src="assets/img/services.jpg"></div>
					</div>

					<div class="scroll" data-dsn-animate="ajax">
						<span class="background"></span>
						<span class="triangle"></span>
					</div>
					<div class="project-title" id="dsn-hero-parallax-title">
						<div class="title-text-header">
							<span class="title-text-header-inner">
								<span data-dsn-animate="ajax">Case Study</span>
							</span>
						</div>

						<div class="sub-text-header" data-dsn-animate="ajax">
							<span>We believe in ideas that bring the change in people's thinking rather than only fulfilling the client's needs!</span>
						</div>
					</div>
				</div>
			</header>

			<div class="wrapper">
				<div class="root-about">

					<section class="our-services section-margin">
						<div class="container">
							<div class="one-title" data-dsn-animate="up">
								<div class="title-sub-container">
									<p class="title-sub">AGENCY LIFE</p>
								</div>
								<h2 class="title-main">Content is Everywhere</h2>
							</div>

							<div class="row">
								<div class="col-md-4 col-12">
									<a href="<?php echo base_url('case-study/real-estate-awards') ?>">
										<div class="wapper-client">
											<div class="logo-box">
												<img src="<?php echo base_url('assets/img/case-study/rea.jpg'); ?>" alt="">
											</div>
										</div>
										<div class="info section-padding-keywords">
											<div class="content">
												<div class="entry">
													<h4 class="subtitle">REAL ESTATE AWARDS</h4>
												</div>
											</div>
										</div>
									</a>
								</div>

								<div class="col-md-4 col-12">
									<a href="<?php echo base_url('case-study/button-dabao-desh-banao') ?>">
										<div class="wapper-client">
											<div class="logo-box">
												<img src="<?php echo base_url('assets/img/case-study/bddb.jpg'); ?>" alt="">
											</div>
										</div>
										<div class="info section-padding-keywords">
											<div class="content">
												<div class="entry">
													<h4 class="subtitle">BUTTON DABAO DESH BANAO</h4>
												</div>
											</div>
										</div>
									</a>
								</div>

								<div class="col-md-4 col-12">
									<a href="<?php echo base_url('case-study/road-to-safety-initiative') ?>">
										<div class="wapper-client">
											<div class="logo-box">
												<img src="<?php echo base_url('assets/img/case-study/rts.jpg'); ?>" alt="">
											</div>
										</div>
										<div class="info section-padding-keywords">
											<div class="content">
												<div class="entry">
													<h4 class="subtitle">ROAD TO SAFETY INITIATIVE</h4>
												</div>
											</div>
										</div>
									</a>
								</div>

							</div>
						</div>
					</section>

					<?php require APPPATH.'views/layout/footer.php'; ?>
				</div>
			</div>
	</main>
	<?php require APPPATH.'views/layout/js.php'; ?>
</body>
</html>
