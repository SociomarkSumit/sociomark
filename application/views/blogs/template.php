<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include(APPPATH.'views\layout\head.php');?>
	<style type="text/css">
		ul{
			margin: 6px 0px;
		}
		ul li{
			color: #3c3b3b!important;
			list-style-type: disc!important;
			margin-left: 20px;
		}
		p{
			color: #3c3b3b!important;
			margin: 6px 0px;
		}
	</style>
</head>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
	<div data-dsn-temp="light"></div>
	<div class="preloader">
		<div class="preloader-after"></div>
		<div class="preloader-before"></div>
		<div class="preloader-block">
			<div class="title">Post</div>
			<div class="percent">0</div>
			<div class="loading">loading...</div>
		</div>
		<div class="preloader-bar">
			<div class="preloader-progress"></div>
		</div>
	</div>

	<?php include(APPPATH.'views\layout\header.php');?>
	<main class="main-root">
		<div id="dsn-scrollbar">

			<header>
				<div class="header-single-post" data-dsn-header="project">
					<div class="post-parallax-wrapper" data-overlay="3">
						<img id="dsn-hero-parallax-img" class="w-100 has-top-bottom" src="<?php echo base_url('images/uploads/media/'.$blogs[0]['imagefile1'])?>" alt=""
							 data-dsn-header="blog" data-dsn-ajax="img">
					</div>
					<div class="container">
						<div class="inner-box m-section">
							<div class="post-info">
								<a href="#" class="blog-post-date dsn-link color1">08 July 2020</a>
							</div>
							<h3 class="title-box mt-10 color2"><?php echo $blogs[0]['title']; ?></h3>
						</div>
					</div>
				</div>
			</header>

			<div class="wrapper">
				<div class="container">
					<div class="news-content">
						<div class="news-content-inner">
							<div class="News-socials-wrapper">
								<div>
									<div class="cat">
										<h5 class="title-caption color1 ">Tagged with: </h5>
										<?php
											$tags = explode(',',$blogs[0]['tags']);
											foreach($tags as $key => $value){
												?>
												<a href="#"><span><?php echo $value ?></span></a>
												<?php
											}
										?>
									</div>
								</div>

								<div>
									<div class="post-share">
										<h5 class="title-caption">Share with:</h5>
										<ul>
											<li><a href="#" target="_blank">Facebook</a></li>
											<li><a href="#" target="_blank">Twitter</a></li>
											<li><a href="#" target="_blank">Linkedin</a></li>
										</ul>
									</div>
								</div>
							</div>

							<div class="post-content">
								<?php
									echo $blogs[0]['content'];
								?>
							</div>
						</div>
					</div>
				</div>

				<section class="contact-up next-post-up  section-padding">
					<div class="container">
						<div class="c-wapp">
							<a href="contact.html" class="effect-ajax">
								<span class="hiring">
									A lovely trip to London
								</span>
								<span class="career">
									Next Post
								</span>
							</a>
						</div>
					</div>
				</section>
				<?php include(APPPATH.'views\layout\footer.php')?>
			</div>
		</div>
	</main>
<?php include(APPPATH.'views\layout\js.php')?>
</body>
</html>
