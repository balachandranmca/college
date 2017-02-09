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

add_action('wp_ajax_college_user_list', 'college_user_list');

function college_user_list()
{
	$cars = array(
		array("Airi0","Satou","Accountant","Tokyo","28th Nov 08","$162,700"),
		array("Airi1","Satou","Accountant","Tokyo","28th Nov 08","$162,700"),
		array("Airi2","Satou","Accountant","Tokyo","28th Nov 08","$162,700"),
		array("Airi3","Satou","Accountant","Tokyo","28th Nov 08","$162,700"),
		array("Airi4","Satou","Accountant","Tokyo","28th Nov 08","$162,700"),
	);
	$json_data = array(
		"draw"            => 1,
		"recordsTotal"    => 5,
		"recordsFiltered" => 5,
		"data"            => $cars
	);
	echo json_encode($json_data);
	exit;
}
add_action('wp_ajax_college_user_list_status', 'college_user_list_status');

function college_user_list_status()
{
	update_user_meta($_POST['user_id'], 'is_disable', $_POST['user_status']);
	echo 'Success';exit;
}
