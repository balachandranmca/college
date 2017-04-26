<?php
/*
 *  College Certificate Page
 * eg: [COLLEGE_CERTIFICATE]
 */


add_shortcode('COLLEGE_CERTIFICATE', 'college_certificate_shortcode');
function college_certificate_shortcode($atts) {	
	ob_start();
	include_once 'template/college_certificate_page.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}