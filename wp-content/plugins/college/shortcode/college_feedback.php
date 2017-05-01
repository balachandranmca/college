<?php
/*
 *  College Feedback Page
 * eg: [COLLEGE_FEEDBACK]
 */


add_shortcode('COLLEGE_FEEDBACK', 'college_feeback_shortcode');
function college_feeback_shortcode($atts) {	
	ob_start();
	include_once 'template/college_feedback_page.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}