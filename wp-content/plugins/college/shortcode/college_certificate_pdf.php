<?php
/*
 *  College Certificate Page
 * eg: [COLLEGE_CERTIFICATE_PDF]
 */

use App\AuthorIssuePaper;

add_shortcode('COLLEGE_CERTIFICATE_PDF', 'college_certificate_pdf_shortcode');
function college_certificate_pdf_shortcode($atts) {	
	$user_id = get_current_user_id();
	
	if(in_array('administrator',get_current_user_role($user_id)) && isset($_GET['volume'])){
			
			$issn = urlencode($_GET['issn']);
			$username = urlencode($_GET['username']);
			$paper_title = urlencode($_GET['paper_title']);
			$volume = urlencode($_GET['volume']);
			$published_date = urlencode($_GET['published_date']);
			include_once WP_PLUGIN_DIR.'/wp-mpdf/mpdf/mpdf.php';
			$mpdf = new mPDF('c', 'A4');
			$mpdf->debug = true;
			$html = do_shortcode("[COLLEGE_CERTIFICATE issn=$issn username=$username paper_title=$paper_title volume=$volume published_date=$published_date]");
			echo $html;
			$mpdf->SetWatermarkImage(site_url().'/wp-content/plugins/college/images/header-logo.png', 0.15, '', array(80,70));
			$mpdf->showWatermarkImage = true;
			$mpdf->WriteHTML($html);
			$today = date('Y-m-d');
			$pdfName = 'certificate-'.$today;
			$mpdf->Output($pdfName.'.pdf', 'D');
			exit;
	}
	else if(isset($_GET['id'])){
		
		$author_paper = AuthorIssuePaper::where('id', '=', $_GET['id'])->get()->toArray();
		$author_paper = $author_paper[0];
		
		if(get_current_user_id() == $author_paper['user_id'] && $author_paper['status'] == 'published'){
			$id = $_GET['id'];
			$username = urlencode($_GET['username']);
			include_once WP_PLUGIN_DIR.'/wp-mpdf/mpdf/mpdf.php';
			$mpdf = new mPDF('c', 'A4');
			$mpdf->debug = true;
			$html = do_shortcode("[COLLEGE_CERTIFICATE id=$id username=$username]");
			$mpdf->SetWatermarkImage(site_url().'/wp-content/plugins/college/images/header-logo.png', 0.15, '', array(80,70));
			$mpdf->showWatermarkImage = true;
			$mpdf->WriteHTML($html);
			$today = date('Y-m-d');
			$pdfName = 'certificate-'.$today;
			$mpdf->Output($pdfName.'.pdf', 'D');
			exit;
		}
	}
	
	
}