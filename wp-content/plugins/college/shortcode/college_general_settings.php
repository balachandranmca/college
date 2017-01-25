<?php
/*
 *  College About us Page
 * eg: [COLLEGE_GENERAL_SETTINGS]
 */


add_shortcode('COLLEGE_GENERAL_SETTINGS', 'college_general_settings_shortcode');
function college_general_settings_shortcode($atts) {	
	ob_start();
	include_once 'template/college_general_settingspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_general_settings', 'college_general_settings');

function college_general_settings()
{
	foreach ($_POST as $key => $value) {
		update_option($key, $value);
	}
}