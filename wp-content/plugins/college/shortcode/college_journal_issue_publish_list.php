<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL_ISSUE_PUBLISH_LIST]
 */

use App\JournalIssuePublish;
use App\Issue;


add_shortcode('COLLEGE_JOURNAL_ISSUE_PUBLISH_LIST', 'college_journal_issue_publish_list_shortcode');
function college_journal_issue_publish_list_shortcode($atts) {
	$journal_issue_publish = JournalIssuePublish::where('issue_id', $_GET["issue_id"])->get()->toArray();
	$publish_status = Issue::where('id', $_GET["issue_id"])->value('published');
	ob_start();
	include_once 'template/college_journal_issue_publish_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal_issue_publish_delete', 'college_journal_issue_publish_delete');

function college_journal_issue_publish_delete()
{
	$journal_issue_publish = JournalIssuePublish::find($_POST['journal_issue_publishid']);
	$pdf_file = json_decode($journal_issue_publish->pdf_file,1);
	unlink( $pdf_file['file'] );
	$journal_issue_publish->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



