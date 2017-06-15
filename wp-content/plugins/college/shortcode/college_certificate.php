<?php
/*
 *  College Certificate Page
 * eg: [COLLEGE_CERTIFICATE]
 */

use App\AuthorIssuePaper;
use App\AuthorIssuePaperReviewer;
use App\Issue;
use App\Journal;
use App\Volume;

add_shortcode('COLLEGE_CERTIFICATE', 'college_certificate_shortcode');
function college_certificate_shortcode($atts) {	
	$author_paper_id = $atts['id'];
	$author_paper = AuthorIssuePaper::where('id', '=', $author_paper_id)->get()->toArray();
	$author_paper = $author_paper[0];
	$issue = Issue::where('id', '=', $author_paper['issue_id'])->get()->toArray();
	$user_id = $author_paper['user_id'];
	$user = get_userdata($user_id);
	$issn = Journal::where('id', '=', $issue[0]['journal_id'])->value('issn_no');
	$user_name = $user->user_nicename;
	$issue_name = $issue[0]['name'];
	$volumeName = Volume::where('id', '=', $issue[0]['volume_id'])->value('name');
	$issue_no = $issue[0]['issue_no'];
	$published_date = $author_paper['published_date'];
	ob_start();
	include_once 'template/college_certificate_page.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}