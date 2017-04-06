<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_EDITOR]
 */

use App\Editor;


add_shortcode('COLLEGE_EDITOR', 'college_editor_shortcode');
function college_editor_shortcode($atts) {
	ob_start();
	include_once 'template/college_editorpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_nopriv_college_editor', 'college_editor');
add_action('wp_ajax_college_editor', 'college_editor');

function college_editor()
{
	/* Create New One */
	$uploadedfile = $_FILES['file'];
	$upload_overrides = array( 'test_form' => false );

	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	$editor['files'] = json_encode($movefile);
	$uploadedfile = $_FILES['photo'];
	$movephoto = wp_handle_upload( $uploadedfile, $upload_overrides );
	$editor['photo'] = json_encode($movephoto);
	if (( $movefile && ! isset( $movefile['error']) && $movephoto && ! isset( $movephoto['error'] ) )) {
		$editor['name'] = $_POST['editorname'];
		$editor['phone_no'] = $_POST['phone_no'];
		$editor['email_id'] = $_POST['email_id'];
		$data = Editor::create($editor);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	echo json_encode(array('success'=>'false'));
	exit;
}


