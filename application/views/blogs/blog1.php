<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include(APPPATH.'views\layout\head.php');?>
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
<?php include(APPPATH.'views\layout\header.php');?>
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

	</div>
</main>
<?php include(APPPATH.'views\layout\js.php')?>
</body>
</html>
