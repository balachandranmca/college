<?php
/*
 *  College About us Page
 * eg: [COLLEGE_USER_LIST]
 */


add_shortcode('COLLEGE_USER_LIST', 'college_user_list_shortcode');
function college_user_list_shortcode($atts) {
	$args = array('role__not_in' => array('administrator'));
	$users = get_users( $args );

	ob_start();
	include_once 'template/college_user_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_user_list_status', 'college_user_list_status');

function college_user_list_status()
{
	update_user_meta($_POST['user_id'], 'is_disable', $_POST['user_status']);
	echo 'Success';exit;
}
