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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">IJRESTs</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">About Us</a></li>
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
            <li><a href="#">Login</a></li>  
          </ul>
        </li>
        <li><a href="#tour">Processing Fee</a></li>
        <li><a href="#contact">Advertise with Us</a></li>
        <li><a href="#contact">Join Us</a></li>
        <li><a href="#contact">Contact Us</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img class="img-responsive" src="wp-content/themes/twentyfourteen/images/civil03.jpg" data-color="lightblue" alt="First Image">
        <div class="carousel-caption">
          <div id="section03" class="scroll-down demo">
            <a href="#section04"><span></span></a>
          </div>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="wp-content/themes/twentyfourteen/images/civil05.jpg" data-color="firebrick" alt="Second Image">
        <div class="carousel-caption">
          <div id="section03" class="scroll-down demo">
            <a href="#section04"><span></span></a>
          </div>
        </div>      
      </div>
    
      <div class="item">
        <img class="img-responsive" src="wp-content/themes/twentyfourteen/images/civil06.jpg" data-color="violet" alt="Third Image">
        <div class="carousel-caption">
          <div id="section03" class="scroll-down demo">
            <a href="#section04"><span></span></a>
          </div>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="wp-content/themes/twentyfourteen/images/mechanilcal02.png" data-color="lightgreen" alt="Fourth Image">
        <div class="carousel-caption">
          <div id="section03" class="scroll-down demo">
            <a href="#section04"><span></span></a>
          </div>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="wp-content/themes/twentyfourteen/images/mechanilcal03.jpg" data-color="tomato" alt="Fifth Image">
        <div class="carousel-caption">
          <div id="section03" class="scroll-down demo">
            <a href="#section04"><span></span></a>
          </div>
        </div>      
      </div>

      <div class="item">
        <img class="img-responsive" src="wp-content/themes/twentyfourteen/images/circuit01.jpg" data-color="tomato" alt="Fifth Image">
        <div class="carousel-caption">
          <div id="section03" class="scroll-down demo">
            <a href="#section04"><span></span></a>
          </div>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<div class="container-fluid" style="height:1000px">
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
  <h1>Some text to enable scrolling</h1>
</div>
 
<div class="container-fluid">
 <div class="col-md-12" id="section04">
    <p>In the “Writing with Purpose” section of the Pattern Based Writing: Quick & Easy Essay program, students learn to apply their new writing strategies to different types (or modes) of writing. The truth is — it’s quite easy to get students writing many different types of paragraphs when they have the right foundation.
  Put simply, all of these different types of paragraphs simply involve layering on a different purpose or intent. When students have the right foundation, it’s just that simple.
  What are you trying to achieve in this paragraph and in your whole composition? What is your purpose right here? Do you wish to describe? Do you want to evaluate? Is your goal to narrate? Is your intent to persuade?
  When students don’t have a proper foundation, these questions don’t mean much to them.  After Pattern Based Writing: Quick & Easy Essay, these questions mean a great deal.</p>
  </div>
  </div>
  <?php
get_header();
?>
<link href="https://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
<?php
get_footer();
?>