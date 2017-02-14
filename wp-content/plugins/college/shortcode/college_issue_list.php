<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_ISSUE_LIST]
 */

use App\Issue;
use App\Volume;
use App\Journal;


add_shortcode('COLLEGE_ISSUE_LIST', 'college_issue_list_shortcode');
function college_issue_list_shortcode($atts) {
	$issueList = Issue::all()->sortBy('id')->toArray();
	$volumeList = Volume::all()->sortBy('id')->toArray();
	$journalList = Journal::all()->sortBy('id')->toArray();
	foreach ($volumeList as $key => $value) {
		$volume[$value['id']] = $value['name'];
	}
	foreach ($journalList as $key => $value) {
		$journal[$value['id']] = $value['name'];
	}
	ob_start();
	include_once 'template/college_issue_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_issue_delete', 'college_issue_delete');

function college_issue_delete()
{
	$issue = Issue::find($_POST['issueid']);
	$issue->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}

add_action('wp_ajax_college_issue_publish', 'college_issue_publish');

function college_issue_publish()
{
	$issue = Issue::where('id', $_POST['issueid']);
	$issues['published'] = 1;
	$issue->update($issues);
	echo json_encode(array('success'=>'true'));
	exit;
}



