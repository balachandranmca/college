<?php
/*
 *  College About us Page
 * eg: [COLLEGE_ABOUT_US]
 */

use App\AuthorIssuePaper;
add_shortcode('COLLEGE_ADMIN_DASHBOARD', 'college_admin_dashboard_shortcode');
function college_admin_dashboard_shortcode($atts) {	
	$recieved = AuthorIssuePaper::where('status', 'recieved')->count();
	$accept = AuthorIssuePaper::where('status', 'accept')->count();
	$reject = AuthorIssuePaper::where('status', 'reject')->count();
	$modify = AuthorIssuePaper::where('status', 'modify')->count();
	$resubmitted = AuthorIssuePaper::where('status', 'resubmitted')->count();
	$transactionSubmitted = AuthorIssuePaper::where('status', 'transactionSubmitted')->count();
	$paid = AuthorIssuePaper::where('status', 'paid')->count();
	$published = AuthorIssuePaper::where('status', 'accept')->count();
	ob_start();
	include_once 'template/college_admin_dashboardpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}