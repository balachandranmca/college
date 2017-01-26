<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_EDITOR_BOARD]
 */

use App\Editor;


add_shortcode('COLLEGE_EDITOR_BOARD', 'college_editor_board_shortcode');
function college_editor_board_shortcode($atts) {
	ob_start();
	include_once 'template/college_editor_boardpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}


