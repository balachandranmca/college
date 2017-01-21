<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_VOLUME_LIST]
 */

use App\Volume;


add_shortcode('COLLEGE_VOLUME_LIST', 'college_volume_list_shortcode');
function college_volume_list_shortcode($atts) {
	$volumeList = Volume::all()->sortBy('id')->toArray();
	ob_start();
	include_once 'template/college_volume_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_volume_delete', 'college_volume_delete');

function college_volume_delete()
{
	$volume = Volume::find($_POST['volumeid']);
	$volume->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



