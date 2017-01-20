<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL_EDITOR_LIST]
 */

use App\JournalEditor;
use App\Journal;


add_shortcode('COLLEGE_JOURNAL_EDITOR_LIST', 'college_journal_editor_list_shortcode');
function college_journal_editor_list_shortcode($atts) {
	$journal_editorList = JournalEditor::all()->sortBy('id')->toArray();
	$journalList = Journal::all()->sortBy('id')->toArray();
	foreach ($journalList as $key => $value) {
		$journal[$value['id']] = $value['name'];
	}
	ob_start();
	include_once 'template/college_journal_editor_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal_editor_delete', 'college_journal_editor_delete');

function college_journal_editor_delete()
{
	$journal_editor = JournalEditor::find($_POST['journal_editorid']);
	$image_old = json_decode($journal_editor->image,1);
	unlink( $image_old['file'] );
	$journal_editor->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



