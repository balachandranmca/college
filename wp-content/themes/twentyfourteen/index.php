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
<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<header>
<div class="banner" style="height:100px;background: blue;"><h1 style="margin:0;color: white;text-align: center;">International Journal of Research in Engineering, Science and Technologies(IJRESTs)</h1></div></header>
<header id="header">
	<!-- Wrapper for slides -->
	<div id="mycarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
			<li data-target="#mycarousel" data-slide-to="3"></li>
			<li data-target="#mycarousel" data-slide-to="4"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<div class="item">
			<img src="https://unsplash.it/2000/1250?image=397" data-color="lightblue" alt="First Image">
		</div>
		<div class="item">
			<img src="https://unsplash.it/2000/1250?image=689" data-color="firebrick" alt="Second Image">
		</div>
		<div class="item">
			<img src="https://unsplash.it/2000/1250?image=675" data-color="violet" alt="Third Image">
		</div>
		<div class="item">
			<img src="https://unsplash.it/2000/1250?image=658" data-color="lightgreen" alt="Fourth Image">
		</div>
		<div class="item">
			<img src="https://unsplash.it/2000/1250?image=638" data-color="tomato" alt="Fifth Image">
		</div>
	</div>

		<!-- Controls -->
	<a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
		<span class="fa fa-angle-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
		<span class="fa fa-angle-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<nav class="navbar navbar-default">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">

	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNav">
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	</button>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="mainNav" >
	<ul class="nav main-menu navbar-nav">
		<li><a href="#"><i class="fa fa-home"></i> HOME</a></li>
		<li><a href="#">About Us</a></li>
		<li class="dropdown" style="width:200px;">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown">Manscript Submission <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<li><a href="#">Action</a></li>
				<li><a href="#">Another action</a></li>
				<li><a href="#">Something else here</a></li>
				<li class="divider"></li>
				<li><a href="#">Separated link</a></li>
				<li class="divider"></li>
				<li><a href="#">One more separated link</a></li>
			</ul>
		</li>
		<li><a href="#">Processing Fee</a></li>
		<li><a href="#">Advertise with Us</a></li>
		<li><a href="#">Join Us</a></li>
		<li><a href="#">Contact</a></li>
		<form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			<input type="text" class="header-search form-control" placeholder="Search">
			</div>
		</form>
	</ul>
	<!-- 
		<ul class="nav  navbar-nav navbar-right">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
		<li><a href="#"><i class="fa fa-twitter"></i></a></li>
		<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
		</ul>
	-->
</div><!-- /.navbar-collapse -->
</nav>
</header>
<?php
get_header();
?>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<!--footer start from here-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <div class="logofooter"> Logo</div>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
        <p><i class="fa fa-map-pin"></i> 210, Aggarwal Tower, Rohini sec 9, New Delhi -        110085, INDIA</p>
        <p><i class="fa fa-phone"></i> Phone (India) : +91 9999 878 398</p>
        <p><i class="fa fa-envelope"></i> E-mail : info@webenlance.com</p>
        
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">GENERAL LINKS</h6>
        <ul class="footer-ul">
          <li><a href="#"> Career</a></li>
          <li><a href="#"> Privacy Policy</a></li>
          <li><a href="#"> Terms & Conditions</a></li>
          <li><a href="#"> Client Gateway</a></li>
          <li><a href="#"> Ranking</a></li>
          <li><a href="#"> Case Studies</a></li>
          <li><a href="#"> Frequently Ask Questions</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">LATEST POST</h6>
        <div class="post">
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
          <p>facebook crack the movie advertisment code:what it means for you <span>August 3,2015</span></p>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-height="300" data-small-header="false" style="margin-bottom:15px;" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
          <div class="fb-xfbml-parse-ignore">
            <blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<!--footer start from here-->

<div class="copyright">
  <div class="container">
    <div class="col-md-6">
      <p>© 2016 - All Rights Ijrest</p>
    </div>
    <div class="col-md-6">
      <ul class="bottom_ul">
        <li><a href="#">About us</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Faq's</a></li>
        <li><a href="#">Contact us</a></li>
        <li><a href="#">Site Map</a></li>
      </ul>
    </div>
  </div>
</div>
<script>
$( document ).ready(function() {
	var $item = $('.carousel .item'); 
	var $wHeight = $(window).height();
	$item.eq(0).addClass('active');
	$item.height($wHeight); 
	$item.addClass('full-screen');

	$('.carousel img').each(function() {
	var $src = $(this).attr('src');
	var $color = $(this).attr('data-color');
	$(this).parent().css({
		'background-image' : 'url(' + $src + ')',
		'background-color' : $color
	});
	$(this).remove();
	});

	$(window).on('resize', function (){
	var $footer = $('#footer');
	$wHeight = $(window).height();
	$item.height($wHeight);
	});

	$('.carousel').carousel({
	interval: 6000,
	pause: "false"
	});

	$(function(){
    	$(".dropdown").hover(            
			function() {
				$('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
				$(this).toggleClass('open');
				$('b', this).toggleClass("caret caret-up");                
			},
			function() {
				$('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
				$(this).toggleClass('open');
				$('b', this).toggleClass("caret caret-up");                
		});
    });
});
</script>