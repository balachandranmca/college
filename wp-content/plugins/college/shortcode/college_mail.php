<?php
/*
 *  College About us Page
 * eg: [COLLEGE_MAIL ]
 */

ini_set('max_execution_time', 300); 
add_shortcode('COLLEGE_MAIL', 'college_mail_shortcode');
function college_mail_shortcode($atts) {
	$id = $_GET['id'];
	
	$message="Dear<br><br>Greetings from IJRESTs!!!!<br><br>We have received manuscript entitled for the publication in International Journal of Research in Engineering, Science and Technologies (IJRESTs). We are grateful if you could accept our invitation to review this paper. The abstract of the paper is provided below for your perusal and we would be glad to have your remarks on this paper for the publication in our journal.<br>";
	$message.="<br><br>On seeing the contents of the abstract, if acceptable to you for review please click on the following link. If you open the link it means you accepted our invitation for review.<br><br>";
	$message.="<br><br>If you are unavailable due to preoccupation or this topic is not related to your research area, kindly inform us. We are very much thankful if you could recommend other experts to review this paper<br><br>";
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