<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_VOLUME]
 */

use App\Volume;

add_shortcode('COLLEGE_VOLUME', 'college_volume_shortcode');
function college_volume_shortcode($atts) {
	if(isset($_GET['id'])){
		$volume = Volume::where('id', $_GET['id'])->get()->toArray();
		$volume = $volume[0];
	}
	ob_start();
	include_once 'template/college_volumepage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_volume', 'college_volume');

function college_volume()
{
	if($_POST['volumeid']) {
		$volume = Volume::where('id', $_POST['volumeid']);
		$volumes['name'] = $_POST['name'];
		$data = $volume->update($volumes);
	}
	else {
		$volume['name'] = $_POST['name'];
		$data = Volume::create($volume);
	}
	echo json_encode(array('success'=>$data));
	die;
}


