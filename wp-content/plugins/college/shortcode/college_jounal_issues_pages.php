<?php
/*
 *  College About us Page
 * eg: [COLLEGE_JOURNAL_ISSUES_PAGES]
 */

use App\JournalIssuePublish;

add_shortcode('COLLEGE_JOURNAL_ISSUES_PAGES', 'college_journal_issues_pages_shortcode');
function college_journal_issues_pages_shortcode($atts) {	
	ob_start();
	$journal_issue_publish = JournalIssuePublish::where('issue_id', $_GET["issue_id"])->get()->toArray();
	include_once 'template/college_journal_issues_pageslist.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}