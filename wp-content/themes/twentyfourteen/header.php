<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	<!-- Oswald / Title Font -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<!-- Ubuntu / Body Font -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
	<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
</head>
<!--<link href="<?php echo get_template_directory_uri(); ?>/css/vendor/font-awesome.min.css" rel="stylesheet">-->
<body id="body" <?php body_class(); ?>>
<div id="loader-overlay" style="display: none;">
	<img id="loader-loading" alt="IJREST-Preloader" src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/loader.gif" />
</div>
<header id="navigation" class="navbar navbar-inverse">
			<div class="container-fluid">
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
					<a class="navbar-brand" href="<?php echo site_url();?>">
						<h1 id="logo">
							<!--<img src="img/logo-meghna.png" alt="Meghna" />-->
							IJRESTs
						</h1>
					</a>
					<!-- /logo -->
				</div>
				<!-- main nav -->
				<nav class="collapse navbar-collapse navbar-right" role="Navigation" style="padding: 0;">
					<div id="slidemenu">
						<ul id="nav" class="nav navbar-nav">
							<?php include_once WP_BAG_PL_SHORTCODE_TPL."college_menupage.php";?>
						</ul>
					</div>
				</nav>
				<!-- /main nav -->
			</div>
		</header>
	<?php
get_header();
?>

