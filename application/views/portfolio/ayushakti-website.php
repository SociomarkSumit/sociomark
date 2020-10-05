<!DOCTYPE html>
<html lang="en-US">
<head>

	<?php
	$title="";
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
		<div class="title">Button Dabao Desh Banao</div>
		<div class="percent">0</div>
		<div class="loading">loading...</div>
	</div>
	<div class="preloader-bar">
		<div class="preloader-progress"></div>
	</div>
</div>

<?php require APPPATH.'views\layout\header.php';?>

<main class="main-root">
	<div id="dsn-scrollbar">

		<div class="wrapper">

			<section class="our-work work-under-header  section-margin-website" data-dsn-col="3">
					<div class="container">
						<img class="mac" src="<?php echo base_url('assets/img/work/websites/mac.png');?>">

						<div class="img-wrapper">

							<img class="extrem-height-image" src="<?php echo base_url('assets/img/work/websites/ayushakti.png');?>">
						</div>

						<style>
							.mac{
								width: 750px;
							}
							.img-wrapper
							{
								overflow: hidden;
								position: absolute;
								float: left;
								top: 42px;
								left:178px;
								height: 375px;
								width: 650px;

								border-radius: 5px 5px 5px 5px;
							}

							.extrem-height-image
							{
								position: absolute;
								top: 0;
								width: 800px;
								height: auto;
								transition: top 10s ease-out 0s;
							}

							.extrem-height-image:hover
							{
								top: -1795px;
							}
						</style>

					</div>
			</section>

			<?php require APPPATH.'views/layout/footer.php';?>
		</div>
</main>

<?php require APPPATH.'views/layout/js.php';?>
</body>
</html>
