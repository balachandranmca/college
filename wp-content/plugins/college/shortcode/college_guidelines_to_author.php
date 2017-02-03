<?php
/*
 *  College About us Page
 * eg: [COLLEGE_GUIDELINES_AUTHOR]
 */


add_shortcode('COLLEGE_GUIDELINES_AUTHOR', 'college_guidelines_author_shortcode');
function college_guidelines_author_shortcode($atts) {	
	ob_start();
	include_once 'template/college_guidelines_authorpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}