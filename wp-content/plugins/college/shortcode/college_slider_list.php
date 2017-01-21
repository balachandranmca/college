<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_SLIDER_LIST]
 */

use App\Slider;


add_shortcode('COLLEGE_SLIDER_LIST', 'college_slider_list_shortcode');
function college_slider_list_shortcode($atts) {
	$sliderList = Slider::all()->sortBy('id')->toArray();
	ob_start();
	include_once 'template/college_slider_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_slider_edit', 'college_slider_edit');

add_action('wp_ajax_college_slider_delete', 'college_slider_delete');

function college_slider_delete()
{
	$slider = Slider::find($_POST['sliderid']);
	$image_old = json_decode($slider->image,1);
	unlink( $image_old['file'] );
	$slider->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



