<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_SLIDER_LIST]
 */

use App\Slider;


add_shortcode('COLLEGE_SLIDER_LIST', 'college_slider_list_shortcode');
function college_slider_list_shortcode($atts) {
	ob_start();
	include_once 'template/college_slider_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_slider_edit', 'college_slider_edit');

function college_slider_edit()
{
	$uploadedfile = $_FILES['file'];

	$upload_overrides = array( 'test_form' => false );

	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	$slider['image'] = json_encode($movefile);
	if ( $movefile && ! isset( $movefile['error'] ) ) {
		$data = Slider::create($slider);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	echo json_encode(array('success'=>'false'));
	exit;
}

add_action('wp_ajax_college_slider_delete', 'college_slider_delete');

function college_slider_delete()
{
	$uploadedfile = $_FILES['file'];

	$upload_overrides = array( 'test_form' => false );

	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	$slider['image'] = json_encode($movefile);
	if ( $movefile && ! isset( $movefile['error'] ) ) {
		$data = Slider::create($slider);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	echo json_encode(array('success'=>'false'));
	exit;
}



