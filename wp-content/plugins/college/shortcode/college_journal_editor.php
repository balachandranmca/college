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
		$journal_editors['name'] = $_POST['name'];
		$journal_editors['qualification'] = $_POST['qualification'];
		$journal_editors['job_nature'] = $_POST['job_nature'];
		$journal_editors['experience'] = $_POST['experience'];
		$journal_editors['department'] = $_POST['department'];
		$journal_editors['place'] = $_POST['place'];
		$journal_editors['city_country'] = $_POST['city_country'];
		$journal_editors['emailid'] = $_POST['emailid'];
		$journal_editors['mobile_no'] = $_POST['mobile_no'];
		$journal_editors['fb_url'] = $_POST['fb_url'];
		$journal_editors['tw_url'] = $_POST['tw_url'];
		$journal_editors['gp_url'] = $_POST['gp_url'];
		$journal_editors['ln_url'] = $_POST['ln_url'];

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
			$journal_editor['name'] = $_POST['name'];
			$journal_editor['qualification'] = $_POST['qualification'];
			$journal_editor['job_nature'] = $_POST['job_nature'];
			$journal_editor['experience'] = $_POST['experience'];
			$journal_editor['department'] = $_POST['department'];
			$journal_editor['place'] = $_POST['place'];
			$journal_editor['city_country'] = $_POST['city_country'];
			$journal_editor['emailid'] = $_POST['emailid'];
			$journal_editor['mobile_no'] = $_POST['mobile_no'];
			$journal_editor['fb_url'] = $_POST['fb_url'];
			$journal_editor['tw_url'] = $_POST['tw_url'];
			$journal_editor['gp_url'] = $_POST['gp_url'];
			$journal_editor['ln_url'] = $_POST['ln_url'];
			
			
			$data = JournalEditor::create($journal_editor);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
	}
}


