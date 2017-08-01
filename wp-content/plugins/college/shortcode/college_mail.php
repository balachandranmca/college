<?php
/*
 *  College About us Page
 * eg: [COLLEGE_MAIL ]
 */

use App\AuthorIssuePaper;

ini_set('max_execution_time', 300); 
add_filter( 'wp_mail_content_type', function( $content_type ) {
	return 'text/html';
});
add_shortcode('COLLEGE_MAIL', 'college_mail_shortcode');
function college_mail_shortcode($atts) {
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$message="<p>Dear</p><p>Greetings from IJRESTs!!!!</p><p>We have received manuscript entitled for the publication in International Journal of Research in Engineering, Science and Technologies (IJRESTs). We are grateful if you could accept our invitation to review this paper. The abstract of the paper is provided below for your perusal and we would be glad to have your remarks on this paper for the publication in our journal.</p>";
		$message.="<p>On seeing the contents of the abstract, if acceptable to you for review please click on the following link. If you open the link it means you accepted our invitation for review.</p>";
		$message.="<p>If you are unavailable due to preoccupation or this topic is not related to your research area, kindly inform us. We are very much thankful if you could recommend other experts to review this paper</p>";
		$author_paper = AuthorIssuePaper::where('id', '=', $_GET['id'])->get()->toArray();
		$author_paper = $author_paper[0];
		$link = json_decode($author_paper['paper'],1);
		$link = $link['url'];
		$message.= '<p><a href="'.$link.'">Download the Paper File</a></p>';
		$link = json_decode($author_paper['copyright'],1);
		$link = $link['url'];
		$message.= "<p><a href='".$link."'>Download the Copyright File</a></p>";
		$subject = " Reviewer Invitation ";
	}
	
	ob_start();
	include_once 'template/college_mailpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

remove_filter( 'wp_mail_content_type', 'set_html_content_type' );
add_filter( 'wp_mail_content_type', 'set_html_content_type' );
function set_html_content_type() {
    return 'text/html';
}

add_action('wp_ajax_college_mailsending', 'college_mailsending');

function college_mailsending()
{
	$to = $_POST['to'];
	$template_content = nl2br(stripslashes($_POST['body']));
	$subject = $_POST['subject'];
	$headers = 'Content-type: text/html;charset=utf-8' . "\r\n";
	wp_mail( $to, $subject, $template_content, $headers );
	exit;
}