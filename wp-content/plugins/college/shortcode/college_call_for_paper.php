<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_CALL_FOR_PAPER]
 */

use App\Issue;
use App\Volume;
use App\Journal;

add_shortcode('COLLEGE_CALL_FOR_PAPER', 'college_call_for_paper_shortcode');
function college_call_for_paper_shortcode($atts) {
	$issueList = Issue::where('status', '=', 0)->orderBy('id','asc')->get()->toArray();
	$issueActiveList = Issue::where('active', '=', 1)->where('status', '=', 0)->get()->toArray();
	$volumeList = Volume::all()->sortBy('id')->toArray();
	$journalList = Journal::all()->sortBy('id')->toArray();
	foreach ($volumeList as $key => $value) {
		$volume[$value['id']] = $value['name'];
	}
	foreach ($journalList as $key => $value) {
		$journal[$value['id']] = $value['name'];
	}
	ob_start();
	include_once 'template/college_call_for_paperpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_call_for_paper', 'college_call_for_paper');

function college_call_for_paper()
{
	Issue::where('id', '>', 0)->update(array('active' => 0));
	$call_for = $_POST['active'];
	foreach ($call_for as $key => $value) {
		Issue::where('id', '=', $value)->update(array('active' => 1));
	}
	die;
	$data = Volume::create($volume);
	echo json_encode(array('success'=>$data));
	die;
}


