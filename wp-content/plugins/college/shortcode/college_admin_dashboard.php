<?php
/*
 *  College About us Page
 * eg: [COLLEGE_ABOUT_US]
 */

use App\AuthorIssuePaper;
use App\AuthorIssuePaperReviewer;
use App\Issue;
add_shortcode('COLLEGE_ADMIN_DASHBOARD', 'college_admin_dashboard_shortcode');
function college_admin_dashboard_shortcode($atts) {	
	$recieved = AuthorIssuePaper::where('status', 'recieved')->count();
	$review = AuthorIssuePaper::where('status', 'review')->count();
	$accept = AuthorIssuePaper::where('status', 'accept')->count();
	$reject = AuthorIssuePaper::where('status', 'reject')->count();
	$modify = AuthorIssuePaper::where('status', 'modify')->count();
	$resubmitted = AuthorIssuePaper::where('status', 'resubmitted')->count();
	$transactionSubmitted = AuthorIssuePaper::where('status', 'transactionSubmitted')->count();
	$paid = AuthorIssuePaper::where('status', 'paid')->count();
	$published = AuthorIssuePaper::where('status', 'accept')->count();

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
	include_once 'template/college_admin_dashboardpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}