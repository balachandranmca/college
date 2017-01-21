<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL_EDITOR]
 */

use App\JournalEditor;
use App\Journal;

add_shortcode('COLLEGE_JOURNAL_EDITOR', 'college_journal_editor_shortcode');
function college_journal_editor_shortcode($atts) {
	if(isset($_GET['id'])){
		$journal_editor = JournalEditor::where('id', $_GET['id'])->get()->toArray();
		$journal_editor = $journal_editor[0];
		$journal_editor['image'] = json_decode($journal_editor['image'], 1);
	}
	$journalList = Journal::all()->sortBy('id')->toArray();
	foreach ($journalList as $key => $value) {
		$journal[$value['id']] = $value['name'];
	}
	
	ob_start();
	include_once 'template/college_journal_editorpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal_editor', 'college_journal_editor');

function college_journal_editor()
{
	if($_POST['journal_editorid']){
		$journal_editor = JournalEditor::where('id', $_POST['journal_editorid']);
		
		$journal_editors['journal_id'] = $_POST['journal_id'];
		$journal_editors['type'] = $_POST['type'];
		$journal_editors['personal_details'] = $_POST['personal_details'];

		if($_FILES['file']){
			$image_old = json_decode($journal_editor->image,1);
			unlink( $image_old['file'] );
			$uploadedfile = $_FILES['file'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$journal_editors['image'] = json_encode($movefile);
		}
		$journal_editor->update($journal_editors);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	else{
		/* Create New One */
		$uploadedfile = $_FILES['file'];
		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$journal_editor['image'] = json_encode($movefile);
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			$journal_editor['journal_id'] = $_POST['journal_id'];
			$journal_editor['type'] = $_POST['type'];
			$journal_editor['personal_details'] = $_POST['personal_details'];
			
			$data = JournalEditor::create($journal_editor);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
	}
}


