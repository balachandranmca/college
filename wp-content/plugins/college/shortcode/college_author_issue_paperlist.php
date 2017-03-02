<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_AUTHOR_ISSUE_PAPER_LIST]
 */

use App\AuthorIssuePaper;
use App\AuthorIssuePaperReviewer;
use App\Issue;


add_shortcode('COLLEGE_AUTHOR_ISSUE_PAPER_LIST', 'college_author_issue_paper_list_shortcode');
function college_author_issue_paper_list_shortcode($atts) {

	$users_list = get_users();
	foreach ($users_list as $key => $value) {
		$user[$value->ID] = $value->data->user_nicename;
	}
	$user_id = get_current_user_id();
	$user_role = get_current_user_role($user_id);
	$user_role = $user_role[0];
	$issueList = Issue::latest()->get()->toArray();
	foreach ($issueList as $key => $value) {
		$issue[$value['id']] = $value['name'];
	}
	if($user_role == "administrator"){
		$authorPaperList = AuthorIssuePaper::latest()->get()->toArray();
	}
	elseif ($user_role == "reviewer") {
		$fullList = AuthorIssuePaper::latest()->get()->toArray();
		foreach ($fullList as $key => $value) {
			$authorIssuePaper[$value['id']] = $value['issue_id'];
			
		}
		$authorPaperList = AuthorIssuePaperReviewer::where('user_id', $user_id)->get()->toArray();
	}	
	elseif ($user_role == "author") {
		$authorPaperList = AuthorIssuePaper::where('user_id', $user_id)->get()->toArray();
	}
	ob_start();
	include_once 'template/college_author_issue_paperlistpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}


