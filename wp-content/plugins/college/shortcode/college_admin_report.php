<?php
/*
 *  College About us Page
 * eg: [COLLEGE_ABOUT_US]
 */

use App\AuthorIssuePaper;
use App\AuthorIssuePaperReviewer;
use App\Issue;
add_shortcode('COLLEGE_ADMIN_REPORT', 'college_admin_report_shortcode');
function college_admin_report_shortcode($atts) {
	$authorPaperList = AuthorIssuePaper::latest()->get()->toArray();
	ob_start();
	include_once 'template/college_admin_reportpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_report', 'college_report');

function college_report(){
	global $wpdb;
	$startDate = $_POST['from'];
	$toDate = $_POST['to'].' 23:59:59';
	$sql = "SELECT aip.status,j.name FROM `author_issue_papers` aip INNER JOIN issues i on aip.issue_id = i.id INNER JOIN journals j on i.journal_id = j.id where aip.created_at between '$startDate' and '$toDate'";
	$result = $wpdb->get_results($sql, ARRAY_A);	
	
	foreach ($result as $key => $value) {
		$issueStatus[$value['name']]['status'][] = $value['status'];
	}
	foreach ($issueStatus as $issue =>$value) {
		 $issueStatusCount[$issue]['status'] =  array_count_values($issueStatus[$issue]['status']);
	}
	
	foreach($issueStatusCount as $key => $value){
		if(!isset($value['status']['recieved']))
			$issueStatusCount[$key]['status']['recieved'] = 0;
		if(!isset($value['status']['review']))
			$issueStatusCount[$key]['status']['review'] = 0;
		if(!isset($value['status']['accept']))
			$issueStatusCount[$key]['status']['accept'] = 0;
		if(!isset($value['status']['reject']))
			$issueStatusCount[$key]['status']['reject'] = 0;
		if(!isset($value['status']['modify']))
			$issueStatusCount[$key]['status']['modify'] = 0;
		if(!isset($value['status']['resubmitted']))
			$issueStatusCount[$key]['status']['resubmitted'] = 0;
		if(!isset($value['status']['transactionSubmitted']))
			$issueStatusCount[$key]['status']['transactionSubmitted'] = 0;
		if(!isset($value['status']['paid']))
			$issueStatusCount[$key]['status']['paid'] = 0;
		if(!isset($value['status']['published']))
			$issueStatusCount[$key]['status']['published'] = 0;
	}
	
	include_once 'template/college_admin_reportparticlepage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	echo json_encode(array('success'=>false, 'content'=>utf8_encode($template_content)));
	exit;
}