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
 
<?php 
    use App\Slider;
    use App\Issue;
    use App\Journal;
    
    $sliderList = Slider::all()->sortBy('id')->toArray();
    $journalList = Journal::all()->sortBy('id')->toArray();
    $issueActiveList = Issue::where('active', '=', 1)->where('status', '=', 0)->get()->toArray();
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
	<!--<script src="<?php echo get_template_directory_uri().'\js\source\jquery.min.js';?>"></script>-->
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->

	<body id="body">
		<!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="Meghna Preloader" src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/preloader.gif"  />
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
          <?php foreach ($sliderList as $key => $value) { ?>
            <?php $image =  json_decode($value['image'],1);?>
            <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2"
                    data-slice2-scale="2">
              <div class="sl-slide-inner">
                <img src="<?php echo $image['url'];?>" alt="slider-one"/>
                <div class="carousel-caption">
                  <div>
                    <!--<img class="wow fadeInUp" src="img/meghna.png" alt="Meghna">-->
                    <h2 data-wow-duration="500ms"  data-wow-delay="500ms" class="heading animated fadeInRight"><?php echo $value['description'];?></h2>
                    <a class="btn btn-primary animated fadeInUp navigation" href="#navigation">Go To Site</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
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
			<?php
				get_header();
			?>
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
						<h2>Welcome To <span class="color">IJRESTs</span></h2>
						<div class="border"></div>
					</div>
					<!-- /section title -->
					<div class="newsbox">
          <div class="col-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading"> 
				  <span class=""></span>
				  <h3>Call for Paper</h3>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <ul class="demo1" style="overflow-y: hidden; height: 210px;margin: 0;">
                      <?php foreach ($issueActiveList as $key => $value) { ?>
                          <li style="" class="news-item">
                            <table cellpadding="4">
                              <tbody>
                                <tr>
                                  <td class="news-content"><?php echo $value['name'];?><a href="#"> Read more...</a></td>
                                </tr>
                              </tbody>
                            </table>
                          </li>
                      <?php } ?>
                      
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 middle-content">
          <p><?php echo stripslashes(get_option('home_page_content'));?></p>
        </div>
        <div class="newsbox">
          <div class="col-md-3">
            <div class="panel panel-primary">
              <div class="panel-heading"> 
				  <span class=""></span>
					<h3> Conference/Seminar</h3>
			  </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-12">
                    <ul class="demo2" style="overflow-y: hidden; height: 460px;margin: 0;">
                      <li style="" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li style="" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li style="" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li style="display:none;" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li style="display:none;" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li style="display:none;" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                      <li style="display:none;" class="news-item">
                        <table cellpadding="4">
                          <tbody>
                            <tr>
                              <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
                            </tr>
                          </tbody>
                        </table>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
          <?php foreach ($journalList as $key => $value) { ?>
              <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                <a href="<?php echo get_buzz_url('college_journal_view').'?id='.$value['id'];?>">
                  <div class="service-block text-center">
                    <div class="service-icon text-center">
                      <i class="fa fa-wordpress fa-5x"></i>
                    </div>
                    <h3><?php echo $value['name'];?></h3>
                    <p><?php echo $value['issn_no'];?></p>
                  </div>
                </a>
              </article>
          <?php } ?>
					<!-- End Single Service Item -->
				</div>
				<!-- End row -->
			</div>
			<!-- End container -->
		</section>
		<!-- End section -->

    <!-- Start Carousel Section
		==================================== -->
    <section class="carousel-section">
      <div class="container">
        <div class="row">
          	<!-- section title -->
					<!--<div class="title text-center wow fadeIn" data-wow-duration="500ms">
						<h2>Our <span class="color">Portfolio</span></h2>
						<div class="border"></div>
					</div>-->
					<!-- /section title -->
        </div>
      </div><!--.container-->
    </section>

    <!-- End Carousel section -->


    

		<?php
get_footer();
?>