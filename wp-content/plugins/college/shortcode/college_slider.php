<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_SLIDER]
 */

use App\Slider;


add_shortcode('COLLEGE_SLIDER', 'college_slider_shortcode');
function college_slider_shortcode($atts) {
	if(isset($_GET['id'])){
		$slider = Slider::where('id', $_GET['id'])->get()->toArray();
		$slider = $slider[0];
		$slider['image'] = json_decode($slider['image'], 1);
	}
	ob_start();
	include_once 'template/college_sliderpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_slider', 'college_slider');

function college_slider()
{
	if($_POST['sliderid']){
		$slider = Slider::where('id', $_POST['sliderid']);
		
		$sliders['slidername'] = $_POST['slidername'];
		$sliders['description'] = $_POST['description'];
		if($_FILES['file']){
			$image_old = json_decode($slider->image,1);
			unlink( $image_old['file'] );
			$uploadedfile = $_FILES['file'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$sliders['image'] = json_encode($movefile);
		}
		$slider->update($sliders);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	else{
		/* Create New One */
		$uploadedfile = $_FILES['file'];
		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$slider['image'] = json_encode($movefile);
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			$slider['slidername'] = $_POST['slidername'];
			$slider['description'] = $_POST['description'];

			$data = Slider::create($slider);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
	}
}


