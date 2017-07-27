<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_PDF_GENERATION_LIST]
 */

use App\PdfGeneration;
use App\AuthorIssuePaper;


add_shortcode('COLLEGE_PDF_GENERATION_LIST', 'college_pdf_generation_list_shortcode');
function college_pdf_generation_list_shortcode($atts) {
	$pdf_list = PdfGeneration::all()->sortBy('id')->toArray();
	$authorIssuePaper = AuthorIssuePaper::all()->sortBy('id')->toArray();	
	foreach ($authorIssuePaper as $key => $value) {
		$authorIssuePapers[$value['id']] = $value['paper_referrer_no'];
	}
	ob_start();
	include_once 'template/college_pdf_generation_listpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}


