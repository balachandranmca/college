<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL_VIEW]
 */

use App\Journal;

add_shortcode('COLLEGE_JOURNAL_VIEW', 'college_journal_view_shortcode');
function college_journal_view_shortcode($atts) {	
	if(isset($_GET['id'])){
		$journal = Journal::where('id', $_GET['id'])->get()->toArray();
		$journal = $journal[0];
	}
	ob_start();
	include_once 'template/college_journal_viewpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}
