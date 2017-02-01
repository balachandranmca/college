<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_CAROSEL_SLIDER_LIST]
 */

use App\CaroselSlider;


add_shortcode('COLLEGE_CAROSEL_SLIDER_LIST', 'college_carosel_slider_list_shortcode');
function college_carosel_slider_list_shortcode($atts) {
	$carosel_sliderList = CaroselSlider::all()->sortBy('id')->toArray();
	ob_start();
	include_once 'template/college_carosel_slider_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_carosel_slider_delete', 'college_carosel_slider_delete');

function college_carosel_slider_delete()
{
	$carosel_slider = CaroselSlider::find($_POST['carosel_sliderid']);
	$image_old = json_decode($carosel_slider->image,1);
	unlink( $image_old['file'] );
	$carosel_slider->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



