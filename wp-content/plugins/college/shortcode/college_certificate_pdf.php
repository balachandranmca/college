<?php
/*
 *  College Certificate Page
 * eg: [COLLEGE_CERTIFICATE_PDF]
 */

use App\AuthorIssuePaper;

add_shortcode('COLLEGE_CERTIFICATE_PDF', 'college_certificate_pdf_shortcode');
function college_certificate_pdf_shortcode($atts) {	
	$author_paper = AuthorIssuePaper::where('id', '=', $_GET['id'])->get()->toArray();
	$author_paper = $author_paper[0];
	if(get_current_user_id() == $author_paper['user_id'] && $author_paper['status'] == 'published'){
		$id = $_GET['id'];
		include_once WP_PLUGIN_DIR.'/wp-mpdf/mpdf/mpdf.php';
		$mpdf = new mPDF('c', 'A4');
		$mpdf->debug = true;
		$html = do_shortcode("[COLLEGE_CERTIFICATE id=$id]");
		$mpdf->WriteHTML($html);
		$today = date('Y-m-d');
		$pdfName = 'certificate-'.$today;
		$mpdf->Output($pdfName.'.pdf', 'D');
		exit;
	}
	
}