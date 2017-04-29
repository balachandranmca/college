<?php
/*
 *  College Advertise us Page
 * eg: [COLLEGE_ADVERTISE_US]
 */


add_shortcode('COLLEGE_ADVERTISE_US', 'college_advertise_us_shortcode');
function college_advertise_us_shortcode($atts) {	
	ob_start();
	include_once 'template/college_advertise_uspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}