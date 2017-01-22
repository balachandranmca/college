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
	$user_signon = wp_signon( $user, false );
	if ( is_wp_error($user_signon) ){
        echo json_encode(array('success'=>false));
    } else {
		$aft_login = site_url();
		if($_POST['aft_login']){
			$aft_login = urldecode($_POST['aft_login']);
		}
		wp_set_current_user($user_signon->ID);
        echo json_encode(array('success'=>true, 'url'=>$aft_login, 'userid'=>$user_signon->ID));
    }
	die;
}


