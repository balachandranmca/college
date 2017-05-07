<?php
/*
 *  College About us Page
 * eg: [COLLEGE_PUBLISH_DOWNLOAD]
 */

use App\PublishPaperDownload;
use App\JournalIssuePublish;
use App\Issue;

add_shortcode('COLLEGE_PUBLISH_DOWNLOAD', 'college_publish_download_shortcode');
function college_publish_download_shortcode($atts) {
		
	$publishPaperDownload = PublishPaperDownload::latest()->get()->toArray();
	$journalIssuePublishList = JournalIssuePublish::latest()->get()->toArray();
	foreach ($journalIssuePublishList as $key => $value) {
		$journalIssuePublish[$value['id']]['issue_id'] = $value['issue_id'];
		$journalIssuePublish[$value['id']]['paper_title'] = $value['paper_title'];
		$journalIssuePublish[$value['id']]['author'] = $value['author'];
		$journalIssuePublish[$value['id']]['page_no'] = $value['page_no'];
	}	
	$issueList = Issue::latest()->get()->toArray();
	foreach ($issueList as $key => $value) {
		$issue[$value['id']] = $value['name'];
	}
	
	ob_start();
	include_once 'template/college_publish_downloadpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}