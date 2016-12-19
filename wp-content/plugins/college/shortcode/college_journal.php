<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL]
 */

use App\Journal;

add_shortcode('COLLEGE_JOURNAL', 'college_journal_shortcode');
function college_journal_shortcode($atts) {	
	ob_start();
	include_once 'template/college_journalpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal', 'college_journal');

function college_journal()
{
    $journal['name'] = $_POST['name'];
    $journal['issn_no'] = $_POST['issn_no'];
    $journal['color'] = $_POST['color'];
	$journal['des'] = stripslashes($_POST['desc']);
	$data = Journal::create($journal);
	echo json_encode(array('success'=>$data));
	die;
}


