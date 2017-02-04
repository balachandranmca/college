<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_CAROSEL_SLIDER]
 */

use App\CaroselSlider;


add_shortcode('COLLEGE_CAROSEL_SLIDER', 'college_carosel_slider_shortcode');
function college_carosel_slider_shortcode($atts) {
	if(isset($_GET['id'])){
		$carosel_slider = CaroselSlider::where('id', $_GET['id'])->get()->toArray();
		$carosel_slider = $carosel_slider[0];
		$carosel_slider['image'] = json_decode($carosel_slider['image'], 1);
	}
	ob_start();
	include_once 'template/college_carosel_sliderpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_carosel_slider', 'college_carosel_slider');

function college_carosel_slider()
{
	if($_POST['carosel_sliderid']){
		$carosel_slider = CaroselSlider::where('id', $_POST['carosel_sliderid']);
		if($_FILES['file']){
			$image_old = json_decode($carosel_slider->image,1);
			unlink( $image_old['file'] );
			$uploadedfile = $_FILES['file'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$carosel_sliders['image'] = json_encode($movefile);
			$carosel_slider->update($carosel_sliders);
		}
		echo json_encode(array('success'=>'true'));
		exit;
	}
	else{
		/* Create New One */
		$uploadedfile = $_FILES['file'];
		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$carosel_slider['image'] = json_encode($movefile);
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			$data = CaroselSlider::create($carosel_slider);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
	}
}


