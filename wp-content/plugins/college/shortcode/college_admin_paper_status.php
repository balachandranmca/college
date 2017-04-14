<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_ADMIN_PAPER_STATUS]
 */

use App\AuthorIssuePaper;
use App\AuthorIssuePaperReviewer;
use App\Issue;


add_shortcode('COLLEGE_ADMIN_PAPER_STATUS', 'college_admin_paper_status_shortcode');
function college_admin_paper_status_shortcode($atts) {

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
	$authorPaperList = AuthorIssuePaper::latest()->get()->toArray();
	ob_start();
	include_once 'template/college_admin_paper_statuspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}


