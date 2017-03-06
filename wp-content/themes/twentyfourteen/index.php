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
    use App\CaroselSlider;
    
    $sliderList = Slider::all()->sortBy('id')->toArray();
    $journalList = Journal::all()->sortBy('id')->toArray();
    $issueActiveList = Issue::where('active', '=', 1)->where('status', '=', 0)->get()->toArray();
    $carosel_sliderList = CaroselSlider::all()->sortBy('id')->toArray();
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
    <section id="loading-mask">
      <div class="loading-img">
        <img alt="Meghna Preloader" src="<?php echo site_url();?>/wp-content/themes/twentyfourteen/img/preloader.gif" />
      </div>
    </section>
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
              <img src="<?php echo $image['url'];?>" alt="slider-one" />
              <div class="carousel-caption">
                <div>
                  <!--<img class="wow fadeInUp" src="img/meghna.png" alt="Meghna">-->
                  <h2 data-wow-duration="500ms" data-wow-delay="500ms" class="heading animated fadeInRight">
                    <?php echo $value['description'];?>
                  </h2>
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
                                    <td class="news-content">
                                      <?php echo $value['name'] ." ".$value['start_date'];?></td>
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
                <?php 
                $user_ID = get_current_user_id();
                $role= get_current_user_role($user_ID);
                if (in_array('author', $role)) { ?>
                    <div class="subpages-sidemenubar">
                          <div href="#" class="list-group-item active">
                              <h4 class="list-group-item-heading">Sub Pages</h5>
                          </div>  
                          <a href="#" class="list-group-item">
                              <h5 class="list-group-item-heading">Guidelines To Author</h5>
                          </a>
                          <a href="#" class="list-group-item" data-for=".step-2">
                              <h5 class="list-group-item-heading">Online Submission</h5>
                          </a>
                          <a href="#" class="list-group-item" data-for=".step-3">
                              <h5 class="list-group-item-heading">Withdrawal Procedure</h5>
                          </a>
                    </div>
                <?php } ?>
              </div>
              <div class="col-md-6 middle-content">
                <p>
                  <?php echo stripslashes(get_option('home_page_content'));?>
                </p>
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
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                            <li style="" class="news-item">
                              <table cellpadding="4">
                                <tbody>
                                  <tr>
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                            <li style="" class="news-item">
                              <table cellpadding="4">
                                <tbody>
                                  <tr>
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                            <li style="display:none;" class="news-item">
                              <table cellpadding="4">
                                <tbody>
                                  <tr>
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                            <li style="display:none;" class="news-item">
                              <table cellpadding="4">
                                <tbody>
                                  <tr>
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                            <li style="display:none;" class="news-item">
                              <table cellpadding="4">
                                <tbody>
                                  <tr>
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                            <li style="display:none;" class="news-item">
                              <table cellpadding="4">
                                <tbody>
                                  <tr>
                                    <td class="news-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="downloads-menubar">
                      <div href="#" class="list-group-item active">
                          <h4 class="list-group-item-heading">Downloads</h4>
                      </div>  
                      <a href="#" class="list-group-item">
                          <h5 class="list-group-item-heading">Paper Template</h5>
                      </a>
                      <a href="#" class="list-group-item" data-for=".step-2">
                          <h5 class="list-group-item-heading">Sample Paper</h5>
                      </a>
                      <a href="#" class="list-group-item" data-for=".step-3">
                          <h5 class="list-group-item-heading">Withdrawal Form</h5>
                      </a>
                      <a href="#" class="list-group-item" data-for=".step-3">
                          <h5 class="list-group-item-heading">Copyright Form</h5>
                      </a>
                 </div>
                </div>
              </div>
            </div>
            <!-- End row -->
          </div>
          <!-- End container -->
      </section>
      <!-- End section -->
      <section>
        <div class="row">
          <!-- section title -->
              <div class="title text-center wow fadeIn" data-wow-duration="500ms">
                <h2>Our <span class="color">Publications</span></h2>
                <div class="border"></div>
              </div>
              <!-- /section title -->
        </div>
      </section>
      <!-- Start Services Section
		==================================== -->
      <section id="services" class="bg-one">
        <div class="service-pattern">
          <div class="container">
            <div class="row">
              <!-- Single Service Item -->
              <?php foreach ($journalList as $key => $value) { ?>
              <article class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp" data-wow-duration="500ms">
                <a href="<?php echo get_buzz_url('college_journal_view').'?id='.$value['id'];?>">
                  <div class="service-block text-center" style="-webkit-box-shadow: inset 0px 0px 12px 6px #<?php echo $value['color'];?>;
        -moz-box-shadow: inset 0px 0px 12px 6px rgba(44, 44, 44, 0.3), 13px 13px 0 #<?php echo $value['color'];?>;
        box-shadow: inset 0px 0px 12px 6px rgba(44, 44, 44, 0.3), 13px 13px 0 #<?php echo $value['color'];?>;">
                    <div class="service-icon text-center">
                      <i class="fa fa-wordpress fa-5x"></i>
                    </div>
                    <h3 style="color: #<?php echo $value['color'];?>;">
                      <?php echo $value['name'];?>
                    </h3>
                    <p>
                      <?php echo $value['issn_no'];?>
                    </p>
                  </div>
                </a>
              </article>
              <?php } ?>
              <!-- End Single Service Item -->
            </div>
            <!-- End row -->
          </div>
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
            <div class="our-portfoliosection title text-center wow fadeIn" data-wow-duration="500ms">
              <h2>Our <span class="color">Portfolio</span></h2>
              <div class="border"></div>
            </div>
            <!-- /section title -->
            <div class="wrapper">
              <div class="jcarousel-wrapper">
                <div class="jcarousel">
                  <ul>
                  <?php foreach ($carosel_sliderList as $key => $value) { ?>
                    <?php $image =  json_decode($value['image'],1);?>
                    <li style="height: 193px;">
                      <img src="<?php echo $image['url'];?>" alt="Image 1">
                    </li>
                  <?php } ?>
                  </ul>
                </div> <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                <p class="jcarousel-pagination"></p>
              </div>
            </div>
          </div>
        </div>
        <!--.container-->
      </section>
      <!-- End Carousel section -->
      <?php dynamic_sidebar( 'sidebar-2' ); ?>
      <?php
get_footer();
?>
<script>
  // jQuery("#body").addClass("login-background");
</script>