<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL_ISSUE_PUBLISH]
 */

use App\JournalIssuePublish;



add_shortcode('COLLEGE_JOURNAL_ISSUE_PUBLISH', 'college_journal_issue_publish_shortcode');
function college_journal_issue_publish_shortcode($atts) {
	if(isset($_GET['id'])){
		$journal_issue_publish = JournalIssuePublish::where('id', $_GET['id'])->get()->toArray();
		$journal_issue_publish = $journal_issue_publish[0];
		$journal_issue_publish['pdf_file'] = json_decode($journal_issue_publish['pdf_file'],1);
	}
	ob_start();
	include_once 'template/college_journal_issue_publishpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal_issue_publish', 'college_journal_issue_publish');

function college_journal_issue_publish()
{
	if($_POST['journal_issue_publishid']){
		$journal_issue_publish = JournalIssuePublish::where('id', $_POST['journal_issue_publishid']);
		if($_FILES['file']) {
			$pdf_file_old = json_decode($journal_issue_publish->pdf_file,1);
			unlink( $pdf_file_old['file'] );
			$uploadedfile = $_FILES['file'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$journal_issue_publishes['pdf_file'] = json_encode($movefile);
		}
		$journal_issue_publishes['sno'] = $_POST['sno'];
		$journal_issue_publishes['issue_id'] = $_POST['issue_id'];
		$journal_issue_publishes['paper_title'] = $_POST['paper_title'];
		$journal_issue_publishes['author'] = $_POST['author'];
		$journal_issue_publishes['page_no'] = $_POST['page_no'];
		$journal_issue_publishes['status'] = $_POST['status'];
		$journal_issue_publish->update($journal_issue_publishes);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	else{
		/* Create New One */
		$uploadedfile = $_FILES['file'];
		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$journal_issue_publish['pdf_file'] = json_encode($movefile);
		$journal_issue_publish['issue_id'] = $_POST['issue_id'];
		$journal_issue_publish['paper_title'] = $_POST['paper_title'];
		$journal_issue_publish['author'] = $_POST['author'];
		$journal_issue_publish['page_no'] = $_POST['page_no'];
		$journal_issue_publish['sno'] = $_POST['sno'];
		$journal_issue_publish['status'] = $_POST['status'];
		if ( $movefile && ! isset( $movefile['error'] ) ) {
			$data = JournalIssuePublish::create($journal_issue_publish);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
	}
}


