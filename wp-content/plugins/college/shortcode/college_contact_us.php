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

add_action('wp_ajax_college_contact_forms', 'college_contact_forms');
add_action('wp_ajax_nopriv_college_contact_forms', 'college_contact_forms');

function college_contact_forms()
{
	echo $to = get_option('contact_email');
	echo $template_content = sanitize_text_field($_POST['body']);
	echo $subject = $_POST['subject'].' - '.$_POST['name'].' from '.$_POST['to'];
	echo $headers = array('Content-Type: text/html; charset=UTF-8');
	wp_mail( $to, $subject, $template_content, $headers );
	exit;
}