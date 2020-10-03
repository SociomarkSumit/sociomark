<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php include('layout/head.php');?>
</head>

<body class="v-light hamburger-menu dsn-effect-scroll dsn-ajax" data-dsn-mousemove="true">
<div data-dsn-temp="light"></div>
<div class="preloader">
	<div class="preloader-after"></div>
	<div class="preloader-before"></div>
	<div class="preloader-block">
		<div class="title">Contact Us</div>
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
							<h5 class="color1">Let's Talk!</h5>
							<h1>Connect with us</h1>
							<p>In a world of algorithms, hashtags & followers, it's easy to make that connection, but the purpose behind the message matters. You can contact us digital-savvy's anytime for assistance!</p>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="wrapper">
			<div class="root-contact">

					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.06801726699!2d73.03714281421178!3d19.016724258776385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c3b0d769ff69%3A0xf839749e6fda79fc!2sSociomark+Digital+Marketing+Agency!5e0!3m2!1sen!2sin!4v1566287639126!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>

				<div class="container section-margin">
					<div class="row">
						<div class="col-lg-6">
							<div class="box-info-contact">
								<h3>HAVE A PROJECT IN MIND?</h3>
								<h5>Feel free to connect with us</h5>
								<p></p>

								<ul>
									<li>
										<span>Phone</span>
										<a href="tel:9819988640">+919819988640</a>
									</li>
									<li>
										<span>Email</span>
										<a href="mailto:business@sociomark.in">business@sociomark.in</a>
									</li>
									<li>
										<span>Address</span>
										225, NBC Complex, Sector 11, CBD Belapur, Navi Mumbai, Maharashtra 400614
									</li>
								</ul>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="form-box">
								<h3>Drop in your query!</h3>
								<form id="contact-form" class="form" method="post" action="http://theme.dsngrid.com/droow-l/contact.php" data-toggle="validator">
									<div class="messages"></div>
									<div class="input__wrap controls">
										<div class="form-group">

											<div class="entry">
												<label>What's your name?</label>
												<input id="form_name" type="text" name="name" placeholder="Type your name" required="required"
													   data-error="name is required.">
											</div>
											<div class="help-block with-errors"></div>
										</div>

										<div class="form-group">
											<div class="entry">
												<label>What's your email address?</label>
												<input id="form_email" type="email" name="email" placeholder="Type your Email Address"
													   required="required" data-error="Valid email is required.">
											</div>
											<div class="help-block with-errors"></div>
										</div>

										<div class="form-group">
											<div class="entry">
												<label>What's up?</label>
												<textarea id="form_message" class="form-control" name="message"
														  placeholder="Tell us about you and the world" required="required"
														  data-error="Please,leave us a message."></textarea>
											</div>
											<div class="help-block with-errors"></div>
										</div>

										<div class="image-zoom" data-dsn="parallax">
											<button>Send Message</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

			<section class="contact-up section-padding">
				<div class="container">
					<div class="c-wapp">
						<a href="contact.html" class="effect-ajax">
							<span class="hiring">We are hiring</span>
							<span class="career">Hop on if you have ideas that change people's thinking!</span>
						</a>
					</div>
				</div>
			</section>

			<?php include('layout/footer.php')?>
		</div>
</main>

<?php include('layout/js.php')?>
</body>
</html>
