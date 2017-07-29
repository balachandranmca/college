<?php
/*
 *  College About us Page
 * eg: [COLLEGE_PROFILE_PAGE]
 */

ini_set('max_execution_time', 300); 
add_shortcode('COLLEGE_PROFILE_PAGE', 'college_profile_page_shortcode');
function college_profile_page_shortcode($atts) {
	$user = get_user_by( 'id', get_current_user_id());
	
	ob_start();
	include_once 'template/college_profile_pageuser.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_change_password', 'college_change_password');

function college_change_password()
{
	$password = $_POST['oldPassword'];
	$user = get_user_by( 'id', get_current_user_id());
	if ( $user && wp_check_password( $password, $user->data->user_pass, $user->ID) ){
		wp_set_password($_POST['newPassword'], get_current_user_id());
		echo "Password Changed Successfully";exit;
	}
	echo "Old Password is incorrect";exit;
	exit;
}