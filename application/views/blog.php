<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php
	$title="";
	$description="";
	$url="";
	$keywords="";
	$image="";
	include('layout/head.php');?>
</head>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
	<div data-dsn-temp="light"></div>
	<div class="preloader">
		<div class="preloader-after"></div>
		<div class="preloader-before"></div>
		<div class="preloader-block">
			<div class="title">Blog</div>
			<div class="percent">0</div>
			<div class="loading">loading...</div>
		</div>
		<div class="preloader-bar">
			<div class="preloader-progress"></div>
		</div>
	</div>
	<?php include('layout/header.php');?>
	<main class="main-root">
		<div id="dsn-scrollbar">
			<header>
				<div class="container header-hero">
					<div class="row">
						<div class="col-lg-6">
							<div class="contenet-hero">
								<h5 class="color1 " >NEWS & IDEAS</h5>
								<h1 class="color2" >Our Blog</h1>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="wrapper">
				<div class="root-blog">
					<div class="container">
						<?php

							foreach($blogs as $key => $value){

								?>
								<article class="post-list-item">
									<figure>
										<a class="image-zoom effect-ajax" href="<?php echo base_url("blog/".$value['slug']) ?>" data-dsn-animate="up">
											<img src="<?php echo base_url('images/uploads/media/'.$value['imagefile1'])?>" alt="">
										</a>
									</figure>
									<div class="post-list-item-content">
										<div class="post-info-top">
											<div class="post-info-date">
												<span class="color1" ><?php
													echo date('d-M-Y',strtotime($value['created_at']));
													?></span>
											</div>
										</div>
										<h3>
											<a href="<?php echo base_url("blog/".$value['slug']) ?>" class="color2" ><?php echo strtoupper($value['title']) ?></a>
										</h3>
										<div class="link-custom" data-dsn-animate="up">
											<a class="image-zoom effect-ajax" href="<?php echo base_url("blog/".$value['slug']) ?>" data-dsn="parallax">
												<span>Read More</span>
											</a>
										</div>
									</div>
								</article>
								<?php
							}
						?>
					</div>

					<?php include('layout/footer.php')?>
				</div>
			</div>
		</div>
	</main>
	<?php include('layout/js.php')?>
</body>
</html>
