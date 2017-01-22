<?php
/*
 *  College About us Page
 * eg: [COLLEGE_PROCESSING_FEES]
 */


add_shortcode('COLLEGE_PROCESSING_FEES', 'college_processing_fees_shortcode');
function college_processing_fees_shortcode($atts) {	
	ob_start();
	include_once 'template/college_processing_feespage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}