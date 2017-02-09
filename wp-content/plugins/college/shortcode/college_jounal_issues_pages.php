<?php
/*
 *  College About us Page
 * eg: [COLLEGE_JOURNAL_ISSUES_PAGES]
 */


add_shortcode('COLLEGE_JOURNAL_ISSUES_PAGES', 'college_journal_issues_pages_shortcode');
function college_journal_issues_pages_shortcode($atts) {	
	ob_start();
	include_once 'template/college_journal_issues_pageslist.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}