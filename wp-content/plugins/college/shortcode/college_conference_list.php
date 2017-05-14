<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_CONFERENCE_LIST]
 */

use App\Conference;


add_shortcode('COLLEGE_CONFERENCE_LIST', 'college_conference_list_shortcode');
function college_conference_list_shortcode($atts) {
	$conferenceList = Conference::all()->sortBy('id')->toArray();
	ob_start();
	include_once 'template/college_conference_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_conference_delete', 'college_conference_delete');

function college_conference_delete()
{
	$conference = Conference::find($_POST['conference_id']);
	$image_old = json_decode($conference->image,1);
	unlink( $image_old['file'] );
	$conference->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



