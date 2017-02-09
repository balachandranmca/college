<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_DOCUMENT]
 */



add_shortcode('COLLEGE_DOCUMENT', 'college_document_shortcode');
function college_document_shortcode($atts) {
	ob_start();
	include_once 'template/college_documentpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_document', 'college_document');

function college_document()
{
	foreach ($_FILES as $key => $value) {
		$uploadedfile = $value;
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			update_option($key, json_encode($movefile));
		}
	}
}


