<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_DEMO]
 */

add_shortcode('COLLEGE_DEMO', 'college_demo_shortcode');
function college_demo_shortcode($atts) {	
	ob_start();
	include_once 'template/college_demopage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

