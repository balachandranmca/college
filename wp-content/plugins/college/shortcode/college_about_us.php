<?php
/*
 *  College About us Page
 * eg: [COLLEGE_ABOUT_US]
 */

ini_set('max_execution_time', 300); 
add_shortcode('COLLEGE_ABOUT_US', 'college_about_us_shortcode');
function college_about_us_shortcode($atts) {
	// include_once WP_PLUGIN_DIR.'/wp-mpdf/mpdf/mpdf.php';
	// $mpdf = new mPDF('c', 'A4');
	// $mpdf->debug = true;
	// $html = do_shortcode("[COLLEGE_CERTIFICATE id=3]");
	// $mpdf->WriteHTML($html);
	// $today = date('Y-m-d');
	// $pdfName = 'weekly-report-'.$today;
	// $mpdf->Output($pdfName.'.pdf', 'D');
	// exit;
	
	ob_start();
	include_once 'template/college_about_uspage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}