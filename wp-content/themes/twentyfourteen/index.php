<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

 ?>
 
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
	<!-- Oswald / Title Font -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<!-- Ubuntu / Body Font -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-54152927-1', 'auto');
		ga('send', 'pageview');
	</script>
	<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
	<script src="<?php echo get_template_directory_uri().'\js\source\jquery.min.js';?>"></script>
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

	<body id="body">
		<!--
	    Start Preloader
	    ==================================== 
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="img/preloader.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		<!--
        Welcome Slider
        ==================================== -->
		<section id="home">
			<div id="slitSlider" class="sl-slider-wrapper">
				<div class="sl-slider">
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2"
									data-slice2-scale="2">
						<div class="sl-slide-inner">
							<img class="img-responsive" src="wp-content/themes/twentyfourteen/images/civil06.jpg" alt="slider-one"/>
							<div class="carousel-caption">
								<div>
									<img class="wow fadeInUp" src="img/meghna.png" alt="Meghna">
									<h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight">Welcome To Meghna</h2>
								</div>
							</div>
						</div>
					</div>
					<!-- /single slide item -->
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5"
									data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<img class="img-responsive" src="wp-content/themes/twentyfourteen/images/mechanilcal03.jpg" alt="slider-two"/>
							<div class="carousel-caption">
								<div>
									<h2 class="heading animated fadeInDown">Highly Responsive</h2>
									<h3 class="animated fadeInUp">With all Mejor Browser support including IE 9</h3>
									<a class="btn btn-green animated fadeInUp" href="#">Get Started</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /single slide item -->
					<!-- single slide item -->
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2"
									data-slice2-scale="1">
						<div class="sl-slide-inner">
							<img class="img-responsive" src="wp-content/themes/twentyfourteen/images/circuit01.jpg" alt="slider-three"/>
							<div class="carousel-caption">
								<div>
									<h2 class="heading animated fadeInRight">One Page Parallax HTML Template</h2>
									<h3 class="animated fadeInLeft">Clean and Professional Design</h3>
									<a class="btn btn-green animated fadeInUp" href="#">Learn More</a>
								</div>
							</div>
						</div>
					</div>
					<!-- /single slide item -->
				</div>
				<!-- /sl-slider -->
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>
				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>
			</div>
			<!-- /slider-wrapper -->
		</section>
		<!--/#home section-->
		<!-- 
        Fixed Navigation
        ==================================== -->
		<header id="navigation" class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
					<!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					<!-- logo -->
					<a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/logo-meghna.png" alt="Meghna" />
						</h1>
					</a>
					<!-- /logo -->
				</div>
				<!-- main nav -->
				<nav class="collapse navbar-collapse navbar-right" role="Navigation">
					<ul id="nav" class="nav navbar-nav">
						<li class="current"><a href="#body">Home</a></li>
						<li><a href="#about">About Us</a></li>
						<li><a href="#services">Our Publications</a></li>
						<!--<li><a href="#showcase">Manscript Submission</a></li>-->
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#">Menuscript Submission
							<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Guidelines to Author</a></li>
								<li><a href="#">Paper Template</a></li>
								<li><a href="#">Sample Paper</a></li>
								<li><a href="#">Copyright Form</a></li>
								<li><a href="#">Online Submission</a></li>
								<li><a href="#">E-Certificate</a></li>
								<li><a href="#">Withdrawal Procedure</a></li>
								<li><a href="#">Withdrawel Form</a></li>
							</ul>
						</li>
						<li><a href="#our-team">Processing Fee</a></li>
						<li><a href="#pricing">Advertise with Us</a></li>
						<li><a href="#blog">Join Us</a></li>
						<li><a href="#contact-us">Contact</a></li>
						<li><a href="#">Login</a></li>
					</ul>
				</nav>
				<!-- /main nav -->
			</div>
		</header>
		<!--
        End Fixed Navigation
        ==================================== -->
		<!--
		Start About Section
		==================================== -->
		<section id="about" class="bg-one">
			<div class="container">
				<div class="row">
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="1500ms">
						<h2>About <span class="color">Us</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-lightbulb-o fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3 class="ddd">We're Creative</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum
									eum dignissimos</p>
							</div>
						</div>
					</div>
					<!-- End About item -->
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
						<div class="wrap-about">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>We're Professional</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum
									eum dignissimos</p>
							</div>
						</div>
					</div>
					<!-- End About item -->
					<!-- About item -->
					<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
						<div class="wrap-about kill-margin-bottom">
							<div class="icon-box">
								<i class="fa fa-users fa-4x"></i>
							</div>
							<!-- Express About Yourself -->
							<div class="about-content text-center">
								<h3>We're Professional</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, nihil, libero, perspiciatis eos provident laborum
									eum dignissimos</p>
							</div>
						</div>
					</div>
					<!-- End About item -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- End section -->
		<!-- Start Services Section
		==================================== -->
		<section id="services" class="bg-one">
			<div class="container">
				<div class="row">
					<!-- section title -->
					<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Our <span class="color">Publications</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-wordpress fa-5x"></i>
							</div>
							<h3>WordPress Theme</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu
								at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-desktop fa-5x"></i>
							</div>
							<h3>Responsive Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu
								at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-play fa-5x"></i>
							</div>
							<h3>Media &amp; Advertisement</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu
								at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="200ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-eye fa-5x"></i>
							</div>
							<h3>Graphic Design</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu
								at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="400ms">
						<div class="service-block text-center">
							<div class="service-icon text-center">
								<i class="fa fa-android fa-5x"></i>
							</div>
							<h3>Apps Development</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu
								at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
					<!-- Single Service Item -->
					<article class="col-md-4 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="service-block text-center kill-margin-bottom">
							<div class="service-icon text-center">
								<i class="fa fa-link fa-5x"></i>
							</div>
							<h3>Networking</h3>
							<p>Lorem ipsum dolor sit amet, consectetur.. Sed id lorem eget orci dictum facilisis vel id tellus. Nullam iaculis arcu
								at mauris dapibus consectetur.</p>
						</div>
					</article>
					<!-- End Single Service Item -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- End section -->
	<?php
get_header();
?>
		<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<?php
get_footer();
?>