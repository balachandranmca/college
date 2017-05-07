<?php
/*
 *  College Feedback Page
 * eg: [COLLEGE_FEEDBACK]
 */

use App\Feedback;

add_shortcode('COLLEGE_FEEDBACK', 'college_feeback_shortcode');
function college_feeback_shortcode($atts) {	
	ob_start();
	include_once 'template/college_feedback_page.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_feedbacks', 'college_feedbacks');

function college_feedbacks()
{
	$feedback['name'] = $_POST['name'];
	$feedback['email'] = $_POST['email'];
	$feedback['comments'] = $_POST['comment'];
	$data = Feedback::create($feedback);
	echo json_encode(array('success'=>'true'));
}