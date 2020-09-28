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
		<div class="title">CNBC DIAGEO</div>
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


		<div class="wrapper">
			<div class="root-project">
				<div class="container-fluid">
					<div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
						<img src="<?php echo base_url('assets/img/work/rts/1.jpg'); ?>" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
						<div class="cap">
							<span>Web Design</span>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
						<img src="<?php echo base_url('assets/img/work/rts/2.jpg'); ?>" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
						<div class="cap">
							<span>Web Design</span>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
						<img src="<?php echo base_url('assets/img/work/rts/3.jpg'); ?>" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
						<div class="cap">
							<span>Web Design</span>
						</div>
					</div>
				</div>

				<div class="container-fluid">
					<div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
						<img src="<?php echo base_url('assets/img/work/rts/4.jpg'); ?>" alt="" data-dsn-y="30%" data-dsn-scale="1.01">
						<div class="cap">
							<span>Web Design</span>
						</div>
					</div>
				</div>

				<div class="container-fluid section-margin mt-0">
					<div class="img-box-small dsn-parallax-full" data-dsn-grid="move-up" data-dsn-triggerhook="0">
						<img src="<?php echo base_url('assets/img/work/rts/5.jpg'); ?>" alt="" data-dsn-y="30%" data-dsn-scale="1.08">
						<div class="cap">
							<span>Web Design</span>
						</div>
					</div>
				</div>

			</div>

			<section class="contact-up section-margin section-padding">
				<div class="container">
					<div class="c-wapp">
						<a href="contact.html" class="effect-ajax">
                                <span class="hiring">
                                    We are hiring
                                </span>
							<span class="career">
                                   Hop on if you have ideas that change people's thinking!
                                </span>
						</a>
					</div>
				</div>
			</section>
			<?php include(APPPATH.'views\layout\footer.php')?>

		</div>
	</div>

	<?php include(APPPATH.'views\layout\js.php')?>
</body>
</html>
