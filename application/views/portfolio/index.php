<!DOCTYPE html>
<html lang="en-US">
<head>
	<?php
	$title="Portfolio";
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
		<div class="title">Work</div>
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
				<div class="container header-hero">
					<div class="row">
						<div class="col-lg-6">
							<div class="contenet-hero">
								<h5 class="color1" >Our Work</h5>
								<h1 class="color2" >Portfolio</h1>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div class="wrapper">
				<div class="root-work">
					<div class="container ">
						<div class="box-title" data-dsn-title="cover">
							<h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
						</div>

						<div class="filterings">
							<div class="filtering-wrap">
								<div class="filtering">
									<div class="selector"></div>
									<button type="button" data-filter="*" class="active">
										All
									</button>
									<button type="button" data-filter=".digital">Digital Creatives</button>
									<button type="button" data-filter=".website">Website</button>
									<button type="button" data-filter=".branding">Branding</button>
									<button type="button" data-filter=".motion">Motion Graphics</button>
								</div>
							</div>
						</div>

						<div class="projects-list gallery">

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/road-to-safety/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/rts-600.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Road to Safety</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/nodwin/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/nodwin-600.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Nodwin Gaming</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/lime/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/lime-600.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>L.I.M.E.</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

<!--							<div class="item digital">-->
<!--								<a href="--><?php //echo base_url('portfolio/tree-house-high-school/social-media-work') ?><!--" data-dsn-grid="move-up">-->
<!--									<img class="has-top-bottom" src="--><?php //echo base_url('assets/img/project/tree-house-high-school.jpg')?><!--" alt="" />-->
<!--									<div class="item-border"></div>-->
<!--									<div class="item-info">-->
<!--										<h4>Tree House High School</h4>-->
<!--										<span><span>View Project</span></span>-->
<!--									</div>-->
<!--								</a>-->
<!--							</div>-->

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/button-dabao-desh-banao/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/Button-Dabo-Desh-Bano.jpg')?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Button Dabao Desh Banao</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/castrol/social-media-work') ?>" class="" data-dsn-ajax="work"
								   data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/castrol600.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Protect India's Engine</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/mission-insure-india/social-media-work') ?>" class="" data-dsn-ajax="work"
								   data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/icici600.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Mission Insure India</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/real-estate-awards/social-media-work') ?>" class="" data-dsn-ajax="work"
								   data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/real-estate-awards.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Real Estate Awards</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/cosplay-genie/social-media-work') ?>" class="" data-dsn-ajax="work"
								   data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/cosplay-genie.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Cosplay Genie</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/smart-cities-of-india/social-media-work') ?>" class="" data-dsn-ajax="work"
								   data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/smart-cities-of-india.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Smart Cities of India</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/mahindra-first-choice-services/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/mfcs.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Mahindra First Choice Services</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/the-professional-couriers/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/tpc600.jpg')?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>The Professional Couriers</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/team-cashless-india/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/mastercard.jpg')?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Team Cashless India</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/sportz-consult/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/Sportz-Consult.jpg')?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Sportz Consult</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/ayushakti/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/ayushakti600.jpg')?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Ayushakti Ayurved</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/ai-awards/social-media-work') ?>" class="" data-dsn-ajax="work"
								   data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/AI.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>AI Awards</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/smarter-india/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/lenovo.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Smarter India</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/grill-box/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/grill-box.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Grill Box</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/kolkata-rolls/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/kolkata-rolls.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Kolkata Rolls</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

<!--							<div class="item digital">-->
<!--								<a href="--><?php //echo base_url('portfolio/frozen-music/social-media-work') ?><!--" data-dsn-grid="move-up">-->
<!--									<img class="has-top-bottom" src="--><?php //echo base_url('assets/img/project/fm.jpg') ?><!--" alt="" />-->
<!--									<div class="item-border"></div>-->
<!--									<div class="item-info">-->
<!--										<h4>Frozen Music</h4>-->
<!--										<span><span>View Project</span></span>-->
<!--									</div>-->
<!--								</a>-->
<!--							</div>-->

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/hollywood-opticians/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/ho.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Hollywood Opticians</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item digital">
								<a href="<?php echo base_url('portfolio/foresight-opticals/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/fo.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Foresight Opticals</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>





							<div class="item digital">
								<a href="<?php echo base_url('portfolio/inifd-vashi/social-media-work') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/project/inifd.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>INIFD Vashi</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

<!--							<div class="item digital">-->
<!--								<a href="--><?php //echo base_url('portfolio/alcazar/social-media-work') ?><!--" data-dsn-grid="move-up">-->
<!--									<img class="has-top-bottom" src="--><?php //echo base_url('assets/img/project/alcazar.jpg') ?><!--" alt="" />-->
<!--									<div class="item-border"></div>-->
<!--									<div class="item-info">-->
<!--										<h4>Alcazar</h4>-->
<!--										<span><span>View Project</span></span>-->
<!--									</div>-->
<!--								</a>-->
<!--							</div>-->

<!--							<div class="item digital">-->
<!--								<a href="--><?php //echo base_url('portfolio/the-united-emperors/social-media-work') ?><!--" data-dsn-grid="move-up">-->
<!--									<img class="has-top-bottom" src="--><?php //echo base_url('assets/img/project/ue.jpg') ?><!--" alt="" />-->
<!--									<div class="item-border"></div>-->
<!--									<div class="item-info">-->
<!--										<h4>United Emperors</h4>-->
<!--										<span><span>View Project</span></span>-->
<!--									</div>-->
<!--								</a>-->
<!--							</div>-->

<!--							<div class="item digital">-->
<!--								<a href="--><?php //echo base_url('portfolio/suggeston/social-media-work') ?><!--" data-dsn-grid="move-up">-->
<!--									<img class="has-top-bottom" src="--><?php //echo base_url('assets/img/project/suggeston.jpg') ?><!--" alt="" />-->
<!--									<div class="item-border"></div>-->
<!--									<div class="item-info">-->
<!--										<h4>Suggeston</h4>-->
<!--										<span><span>View Project</span></span>-->
<!--									</div>-->
<!--								</a>-->
<!--							</div>-->
<!---->
<!--							<div class="item digital">-->
<!--								<a href="--><?php //echo base_url('portfolio/sociomark/social-media-work') ?><!--" data-dsn-grid="move-up">-->
<!--									<img class="has-top-bottom" src="--><?php //echo base_url('assets/img/project/sociomark.jpg') ?><!--" alt="" />-->
<!--									<div class="item-border"></div>-->
<!--									<div class="item-info">-->
<!--										<h4>Sociomark</h4>-->
<!--										<span><span>View Project</span></span>-->
<!--									</div>-->
<!--								</a>-->
<!--							</div>-->

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/ayushakti-usa.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Ayushakti USA</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/dr-smita-naram.jpg') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Dr Smita Naram</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

						<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/kolkatarolls.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Kolkata Rolls</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/aainos.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Aainos</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/theunitedemperors.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>The United Emperors</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/portraiturebypari.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Portraiture by pari</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/thegrandlegacy.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>The grand legacy</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/springville.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Spring Ville</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>

							<div class="item website">
								<a href="<?php echo base_url('') ?>" data-dsn-grid="move-up">
									<img class="has-top-bottom" src="<?php echo base_url('assets/img/website/sincerelyfinance.png') ?>" alt="" />
									<div class="item-border"></div>
									<div class="item-info">
										<h4>Sincerely Finance</h4>
										<span><span>View Project</span></span>
									</div>
								</a>
							</div>
						</div>
						<div class="section-margin"></div>
					</div>
				</div>
				<?php require APPPATH.'views/layout/footer.php';?>
			</div>
		</div>
	</main>
<?php require APPPATH.'views/layout/js.php';?>
</body>
</html>
