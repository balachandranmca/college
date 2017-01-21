<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_ISSUE]
 */

use App\Issue;
use App\Volume;
use App\Journal;

add_shortcode('COLLEGE_ISSUE', 'college_issue_shortcode');
function college_issue_shortcode($atts) {
	if(isset($_GET['id'])){
		$issue = Issue::where('id', $_GET['id'])->get()->toArray();
		$issue = $issue[0];
	}

	$volumeList = Volume::all()->sortBy('id')->toArray();
	$journalList = Journal::all()->sortBy('id')->toArray();
	foreach ($volumeList as $key => $value) {
		$volume[$value['id']] = $value['name'];
	}
	foreach ($journalList as $key => $value) {
		$journal[$value['id']] = $value['name'];
	}
	
	ob_start();
	include_once 'template/college_issuepage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_issue', 'college_issue');

function college_issue()
{
	if($_POST['issueid']) {
		$issue = Issue::where('id', $_POST['issueid']);
		$issues['issue_no'] = $_POST['issue_no'];
		$issues['name'] = $_POST['name'];
		$issues['start_date'] = $_POST['date'];
		$issues['volume_id'] = $_POST['volume_id'];
		$issues['journal_id'] = $_POST['journal_id'];
		$data = $issue->update($issues);
	}
	else {
		$issue['issue_no'] = $_POST['issue_no'];
		$issue['name'] = $_POST['name'];
		$issue['start_date'] = $_POST['date'];
		$issue['volume_id'] = $_POST['volume_id'];
		$issue['journal_id'] = $_POST['journal_id'];
		$data = Issue::create($issue);
	}
	echo json_encode(array('success'=>$data));
	die;
}


