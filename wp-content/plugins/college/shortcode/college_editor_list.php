<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_EDITOR_LIST]
 */

use App\Editor;


add_shortcode('COLLEGE_EDITOR_LIST', 'college_editor_list_shortcode');
function college_editor_list_shortcode($atts) {
	$editorList = Editor::all()->sortBy('id')->toArray();
	ob_start();
	include_once 'template/college_editor_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_editor_edit', 'college_editor_edit');

function college_editor_edit()
{
	$editor = Editor::where('id', $_POST['editorid']);
	$editors['is_verified'] = 1;
	$editor->update($editors);
	echo json_encode(array('success'=>'true'));
	exit;
}
add_action('wp_ajax_college_editor_download', 'college_editor_download');

function college_editor_download()
{
	$editor = Editor::where('id', $_POST['editorid']);
	$editors['is_verified'] = 1;
	$editor->update($editors);
	echo json_encode(array('success'=>'true'));
	exit;
}



