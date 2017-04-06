<?php
/*
 *  College About us Page
 * eg: [COLLEGE_ABOUT_US]
 */

use App\AuthorIssuePaperReviewer;
add_shortcode('COLLEGE_REVIEWER_DASHBOARD', 'college_reviewer_dashboard_shortcode');
function college_reviewer_dashboard_shortcode($atts) {	
	$user_id = get_current_user_id();
	$reviewed = AuthorIssuePaperReviewer::where('user_id', $user_id)->whereNotNull('status')->count();
	$assigned = AuthorIssuePaperReviewer::where('user_id', $user_id)->whereNull('status')->count();
	ob_start();
	include_once 'template/college_reviewer_dashboardpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}