<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
<body id="body">
		<?php 
			$user_ID = get_current_user_id();
			$role = get_current_user_role($user_ID);
			if (!in_array('administrator', $role)) { ?>
		<!-- Srart Contact Us
		=========================================== -->
		<!-- section title -->
		<div class="title text-center wow fadeIn" data-wow-duration="500ms">
			<h2>Get In <span class="color">Touch</span></h2>
			<div class="border"></div>
		</div>
		<!-- /section title -->		
		<section id="contact-us">
			<div class="container">
				<div class="row">
					<!-- Contact Details -->
					<div class="contact-info col-md-8 wow fadeInUp" data-wow-duration="500ms">
						<h3>Contact Details</h3>
						<p></p>
						<div class="contact-details">

							<div class="con-info clearfix">
								<i class="fa fa-user fa-lg"></i>
								<span>Name: Dr. Y.R.M. Rao,B.E, (Civil)., M.E., Ph.D., </br>Editor-in-Chief (IJRESTs).</span>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-home fa-lg"></i>
								<span>Address: PLOT #3, II FLOOR, JAWAHAR NAGAR, </br>3rd CROSS, BHOOMIANPET,</br>PONDICHERRY -605005.</span>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-globe fa-lg"></i>
								<span>Country: India</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-phone fa-lg"></i>
								<span>Mobile:  +91-9786777229</span>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-envelope fa-lg"></i>
								<span>Email:  editor@ijrests.org</span>
							</div>
						</div>
					</div>

					<div class="contact-info col-md-4 wow fadeInUp" data-wow-duration="500ms">
						<h3>Our Services</h3>
						<p></p>
						<div class="contact-details">
							<div class="con-info clearfix">
								<i class="fa fa-chevron-right fa-lg"></i>
								<a href="<?php echo get_buzz_url('college_about_us');?>"><span>About Us</span></a>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-chevron-right fa-lg"></i>
								<a href="#"><span>Journals</span></a>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-chevron-right fa-lg"></i>
								<a href="<?php echo get_buzz_url('college_editor');?>"><span>Editorialboard</span></a>
							</div>
							
							<div class="con-info clearfix">
								<i class="fa fa-chevron-right fa-lg"></i>
								<a href="<?php echo get_buzz_url('college_processing_fees');?>"><span>Processing Fee</span></a>
							</div>

							<div class="con-info clearfix">
								<i class="fa fa-chevron-right fa-lg"></i>
								<a href="<?php echo get_buzz_url('college_contact_us');?>"><span>Contact</span></a>
							</div>
						</div>
					</div>
					<!-- / End Contact Details -->
						
				
				</div> <!-- end row -->
			</div> <!-- end container -->
			
			<!-- Google Map
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<div id="map-canvas"></div>
			</div>	/Google Map -->
			
		</section> <!-- end section -->
		<section class="">
			 <div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<p>&copy; 2017 IJRESTs.</p>
						</div>
						<div class="col-sm-6">
							<p class="pull-right">Designed by <a href="#">IJRESTs</a></p>
						</div>
					</div>
     			</div>
			 </div>
		</section>
		<?php } ?>
		
		<!-- end Contact Area
		========================================== -->
		
		<!--<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						/**** Footer Social Links ****/
						<div class="social-icon">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
							</ul>
						</div>
						/**** End Footer Social Links ****/

						/**** copyright /****
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/logo-meghna.png" alt="Meghna" /> 
							</a>
							<br />
							
							<p>Design And Developed by <a href="#"> IJRESTs Team</a>. Copyright &copy; 2017. All Rights Reserved.</p>
						</div>
						/**** /copyright ****/
						
					</div> /**** end col lg 12 ****/
				</div> /**** end row ****/
			</div> /**** end container ****/
		</footer> --> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
	<?php wp_footer(); ?>

</body>
</html>