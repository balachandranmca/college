<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_LOGIN]
 */

// use App\Journal;

add_shortcode('COLLEGE_LOGIN', 'college_login_shortcode');
function college_login_shortcode($atts) {	
	
	ob_start();
	include_once 'template/college_loginpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_nopriv_college_login', 'college_login');

function college_login()
{
	$user = array();
    $user['user_login'] = $_POST['username'];
    $user['user_password'] = $_POST['password'];
	$login_user = get_user_by( 'email', $_POST['username'] );
	if(get_usermeta( $login_user->ID, 'is_disable', true ) == "1"){
		echo json_encode(array('success'=>false, 'disable'=>true));exit;
	}
	$user_signon = wp_signon( $user, false );
	if ( is_wp_error($user_signon) ){
        echo json_encode(array('success'=>false));
    } else {
		$aft_login = get_buzz_url('college_journal');
		$role= get_current_user_role($user_signon->ID);
		if(in_array('administrator', $role)){
            $aft_login = get_buzz_url('college_admin_dashboard');
        }
		if (in_array('reviewer', $role)) {
            $aft_login = get_buzz_url('college_reviewer_dashboard');
        }
		if($_POST['aft_login']){
			$aft_login = urldecode($_POST['aft_login']);
		}
		wp_set_current_user($user_signon->ID);
        echo json_encode(array('success'=>true, 'url'=>$aft_login, 'userid'=>$user_signon->ID));
    }
	die;
}

add_action('wp_ajax_nopriv_college_registration', 'college_registration');

function college_registration()
{
	global $wpdb;
	$password = wp_generate_password( 8, false );
	$user_login = $_POST['email'];
	$user_pass = $password;
	$role = $_POST['role'];
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

	$to = $_POST['email'];

	$subject = 'Welcome to IJRESTS';
	
	$message = "UserName is $user_login and New Password Is $password";

	// send email
	$headers = array('Content-Type: text/html; charset=UTF-8');
	$msgs = wp_mail( $to, $subject, $message );
	$aft_register = get_buzz_url('college_login');
	echo json_encode(array('success'=>true, 'url'=>$aft_register));
	die;
}


