<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_REVIEWER]
 */

use App\Journal;

add_shortcode('COLLEGE_REVIEWER', 'college_reviewer_shortcode');
function college_reviewer_shortcode($atts) {	
	$journalList = Journal::all()->sortBy('id')->toArray();
	foreach ($journalList as $key => $value) {
		$journal[$value['id']] = $value['name'];
	}
	ob_start();
	include_once 'template/college_reviewerpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_reviewer', 'college_reviewer');

function college_reviewer()
{
	global $wpdb;
	$password = wp_generate_password( 8, false );
	$user_login = $_POST['email'];
	$user_pass = $password;
	$role = 'reviewer';
	$user_nicename = $_POST['username'];
	$user_email = $_POST['email'];
	
	// $userdata = compact('user_login', 'user_email', 'nickname', 'role' );
	$userdata = compact('user_login', 'user_email', 'user_pass', 'first_name','user_nicename', 'role');
	$user_id = wp_insert_user($userdata);
	if(is_wp_error($user_id)){
		echo json_encode(array('success'=>false));exit;
	}
	
	update_user_meta( $user_id, 'phone_no', $_POST['phoneno'] );
	update_user_meta( $user_id, 'is_disable', "0" );
	update_user_meta( $user_id, 'journal_id', $_POST['journal_id'] );
	
    
	$to = $_POST['email'];

	$subject = 'Welcome to IJRESTS';
    $user_name = $_POST['username'];
    $user_email = $to;
    $user_password = $password;
    
	ob_start();
    include_once "template/mail/college_reviewer_registermail.php";
    $message = ob_get_clean();
	// send email
    $headers = "From: " . strip_tags("contact@ijrests.com") . "\r\n";
    $headers .= "Reply-To: ". strip_tags("contact@ijrests.com") . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
	$msgs = wp_mail( $to, $subject, $message, $headers );
	$aft_register = get_buzz_url('college_user_list');
	echo json_encode(array('success'=>true, 'url'=>$aft_register, 'msgs'=>$msgs));
	die;
}


