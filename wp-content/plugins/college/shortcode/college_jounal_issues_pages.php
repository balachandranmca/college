<?php
/*
 *  College About us Page
 * eg: [COLLEGE_JOURNAL_ISSUES_PAGES]
 */

use App\JournalIssuePublish;
use App\Issue;
use App\Journal;
use App\PublishPaperDownload;

add_shortcode('COLLEGE_JOURNAL_ISSUES_PAGES', 'college_journal_issues_pages_shortcode');
function college_journal_issues_pages_shortcode($atts) {	
	ob_start();
	$journal_issue_publish = JournalIssuePublish::where('issue_id', $_GET["issue_id"])->get()->toArray();
	$issue = Issue::where('id', $_GET['issue_id'])->get()->toArray();
	$issue = $issue[0];
	$journal = Journal::where('id', $issue['journal_id'])->get()->toArray();
	$journal = $journal[0];
	include_once 'template/college_journal_issues_pageslist.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}


add_action('wp_ajax_college_issue_download', 'college_issue_download');

function college_issue_download()
{
	$download_info['user_id'] = $_POST['user_id'];
	$download_info['paper_id'] = $_POST['paper_id'];
	$data = PublishPaperDownload::create($download_info);
}