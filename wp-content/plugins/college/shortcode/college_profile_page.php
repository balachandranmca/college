<?php
/*
 *  College About us Page
 * eg: [COLLEGE_PROFILE_PAGE]
 */

ini_set('max_execution_time', 300); 
add_shortcode('COLLEGE_PROFILE_PAGE', 'college_profile_page_shortcode');
function college_profile_page_shortcode($atts) {
	ob_start();
	include_once 'template/college_profile_pageuser.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}