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
  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <header id="home">
    <div id="home-slider" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active" style="background-image: url(../images/slider/1.jpg) !important;
    background-repeat: no-repeat;
    background-position: center;
    height: 150px;
    background-size: cover;">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Welcome to <span>Oxygen</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(../images/slider/2.jpg) !important;
    background-repeat: no-repeat;
    background-position: center;
    height: 150px;
    background-size: cover;">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">Say Hello to <span>Oxygen</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
        <div class="item" style="background-image: url(../images/slider/3.jpg) !important;
    background-repeat: no-repeat;
    background-position: center;
    height: 150px;
    background-size: cover;">
          <div class="caption">
            <h1 class="animated fadeInLeftBig">We are <span>Creative</span></h1>
            <p class="animated fadeInRightBig">Bootstrap - Responsive Design - Retina Ready - Parallax</p>
            <a data-scroll class="btn btn-start animated fadeInUpBig" href="#services">Start now</a>
          </div>
        </div>
      </div>
      <a class="left-control" href="#home-slider" data-slide="prev"><i class="fa fa-angle-left"></i></a>
      <a class="right-control" href="#home-slider" data-slide="next"><i class="fa fa-angle-right"></i></a>

      <a id="tohash" href="#services"><i class="fa fa-angle-down"></i></a>

    </div><!--/#home-slider-->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="#home">Home</a></li>
            <li class="scroll"><a href="#services">Service</a></li> 
            <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li>
            <li class="scroll"><a href="#team">Team</a></li>
            <li class="scroll"><a href="#blog">Blog</a></li>
            <li class="scroll"><a href="#contact">Contact</a></li>       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->
<?php
get_header();
?>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<?php
get_footer();
?>
<script>
</script>