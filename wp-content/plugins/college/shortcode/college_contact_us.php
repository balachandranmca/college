<?php
/*
 *  College Contact us Page
 * eg: [COLLEGE_CONTACT_US]
 */


add_shortcode('COLLEGE_CONTACT_US', 'college_contact_us_shortcode');
function college_contact_us_shortcode($atts) {	
	ob_start();
	include_once 'template/college_contact_uspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}