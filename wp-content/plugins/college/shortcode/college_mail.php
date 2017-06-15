<?php
/*
 *  College About us Page
 * eg: [COLLEGE_MAIL ]
 */

ini_set('max_execution_time', 300); 
add_shortcode('COLLEGE_MAIL', 'college_mail_shortcode');
function college_mail_shortcode($atts) {
	ob_start();
	include_once 'template/college_mailpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_mailsending', 'college_mailsending');

function college_mailsending()
{
	$to = $_POST['to'];
	$template_content = $_POST['body'];
	$subject = $_POST['subject'];
	$headers = array('Content-Type: text/html; charset=UTF-8');
	wp_mail( $to, $subject, $template_content, $headers );
	exit;
}