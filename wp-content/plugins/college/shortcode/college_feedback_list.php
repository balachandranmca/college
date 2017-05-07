<?php
/*
 *  College About us Page
 * eg: [COLLEGE_FEEDBACK_LIST]
 */


use App\Feedback;

add_shortcode('COLLEGE_FEEDBACK_LIST', 'college_feeback_list_shortcode');
function college_feeback_list_shortcode($atts) {
	$feedback = Feedback::latest()->get()->toArray();	
	ob_start();
	include_once 'template/college_feedback_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}
