<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_CAROSEL_SLIDER]
 */

use App\PdfGeneration;
use App\AuthorIssuePaper;


add_shortcode('COLLEGE_PDF_GENERATION', 'college_pdf_generation_shortcode');
function college_pdf_generation_shortcode($atts) {
	$authorPaperList = AuthorIssuePaper::where('status', 'published')->get()->toArray();
	include_once 'template/college_pdf_generationpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_pdf_generation', 'college_pdf_generation');

function college_pdf_generation()
{
	$pdf['name'] = $_POST['name'];
	$pdf['author_issue_paper_id'] = $_POST['author_issue_paper_id'];
	$data = PdfGeneration::create($pdf);
	echo json_encode(array('success'=>'true'));
	exit;
}


