<?php
/*
 *  College Advertise us Page
 * eg: [COLLEGE_ADVERTISE_US]
 */

use App\Conference;

add_shortcode('COLLEGE_ADVERTISE_US', 'college_advertise_us_shortcode');
function college_advertise_us_shortcode($atts) {
	if(isset($_GET['id'])){
		$conference = Conference::where('id', $_GET['id'])->get()->toArray();
		$conference = $conference[0];
		$conference['image'] = json_decode($conference['image'], 1);
	}	
	ob_start();
	include_once 'template/college_advertise_uspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_conferences', 'college_conferences');

function college_conferences()
{
	if($_POST['conference_id']){
		$conference = Conference::where('id', $_POST['conference_id']);
		if($_FILES['file']){
			$image_old = json_decode($conference->image,1);
			unlink( $image_old['file'] );
			$uploadedfile = $_FILES['file'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$conferences['image'] = json_encode($movefile);
		}
		$conferences['description'] = $_POST['description'];
		$conference->update($conferences);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	else{
		/* Create New One */
		$uploadedfile = $_FILES['file'];
		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$conference['image'] = json_encode($movefile);
		$conference['description'] = $_POST['description'];
		print_r($_POST);
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			$data = Conference::create($conference);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
	}
}