<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_JOURNAL]
 */

use App\Journal;

add_shortcode('COLLEGE_JOURNAL', 'college_journal_shortcode');
function college_journal_shortcode($atts) {	
	if(isset($_GET['id'])){
		$journal = Journal::where('id', $_GET['id'])->get()->toArray();
		$journal = $journal[0];
		$journal['images'] = json_decode($journal['images'], 1);
		$journal['header_img'] = json_decode($journal['header_img'], 1);
	}
	ob_start();
	include_once 'template/college_journalpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_journal', 'college_journal');

function college_journal()
{
	if($_POST['journalid']) {
		$journal = Journal::where('id', $_POST['journalid']);
		if($_FILES['images']){
			$image_old = json_decode($journal->images,1);
			unlink( $image_old['file'] );
			$uploadedfile = $_FILES['images'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$journals['images'] = json_encode($movefile);
		}
		if($_FILES['header_img']){
			$image_old = json_decode($journal->header_img,1);
			unlink( $image_old['file'] );
			$uploadedfile = $_FILES['header_img'];
			$upload_overrides = array( 'test_form' => false );
			$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
			$journals['header_img'] = json_encode($movefile);
		}
		$journals['name'] =  $_POST['name'];
		$journals['issn_no'] = $_POST['issn_no'];
		$journals['color'] = $_POST['color'];
		$journals['impact_no'] = $_POST['impact_no'];
		$journals['des'] = stripslashes($_POST['desc']);
		$journals['referrer_no'] = $_POST['referrer_no'];
		$journal->update($journals);
	}
	else {
		$uploadedfile = $_FILES['images'];
		$upload_overrides = array( 'test_form' => false );
		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$journal['images'] = json_encode($movefile);

		$uploadedfile = $_FILES['header_img'];
		$upload_overrides = array( 'test_form' => false );
		$movefiles = wp_handle_upload( $uploadedfile, $upload_overrides );
		$journal['header_img'] = json_encode($movefiles);

		if ( $movefile && ! isset( $movefile['error'] ) && $movefiles && ! isset( $movefiles['error'] ) ) {
			$journal['name'] = $_POST['name'];
			$journal['issn_no'] = $_POST['issn_no'];
			$journal['color'] = $_POST['color'];
			$journal['des'] = stripslashes($_POST['desc']);
			$journal['impact_no'] = $_POST['impact_no'];
			$journal['referrer_no'] = $_POST['referrer_no'];
			$data = Journal::create($journal);
		}
	}
	echo json_encode(array('success'=>$data));
	die;
}


