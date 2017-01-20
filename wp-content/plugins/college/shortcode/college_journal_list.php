<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL_LIST]
 */

use App\Journal;


add_shortcode('COLLEGE_JOURNAL_LIST', 'college_journal_list_shortcode');
function college_journal_list_shortcode($atts) {
	$journalList = Journal::all()->sortBy('id')->toArray();
	ob_start();
	include_once 'template/college_journal_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal_delete', 'college_journal_delete');

function college_journal_delete()
{
	$journal = Journal::find($_POST['journalid']);
	$journal->forceDelete();
	echo json_encode(array('success'=>'true'));
	exit;
}



