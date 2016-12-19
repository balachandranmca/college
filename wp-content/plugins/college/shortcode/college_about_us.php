<?php
/*
 *  College About us Page
 * eg: [COLLEGE_ABOUT_US]
 */


add_shortcode('COLLEGE_ABOUT_US', 'college_about_us_shortcode');
function college_about_us_shortcode($atts) {	
	ob_start();
	include_once 'template/college_about_uspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}