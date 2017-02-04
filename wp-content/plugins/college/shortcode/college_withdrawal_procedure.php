<?php
/*
 *  College About us Page
 * eg: [COLLEGE_WITHDRAWAL_PROCEDURE]
 */


add_shortcode('COLLEGE_WITHDRAWAL_PROCEDURE', 'college_withdrawal_procedure_shortcode');
function college_withdrawal_procedure_shortcode($atts) {	
	ob_start();
	include_once 'template/college_withdrawal_procedurepage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}