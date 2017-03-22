<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_AUTHOR_ISSUE_PAPER]
 */

use App\AuthorIssuePaper;
use App\Issue;


add_shortcode('COLLEGE_AUTHOR_ISSUE_PAPER', 'college_author_issue_paper_shortcode');
function college_author_issue_paper_shortcode($atts) {
	$args = array('role__in' => array('reviewer'));
	$users = get_users( $args );
	$author_paper = AuthorIssuePaper::where('user_id', '=', get_current_user_id())->select('issue_id')->get()->toArray();
	foreach ($author_paper as $key) {
		$author_papers[] = $key['issue_id'];
	}
	$issueActiveList = Issue::where('active', '=', 1)->where('status', '=', 0)->get()->toArray();
	ob_start();
	include_once 'template/college_author_issue_paperpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_author_issue_paper', 'college_author_issue_paper');

function college_author_issue_paper()
{
		/* Create New One */
		$uploadedfile = $_FILES['paper_template'];
		$uploaded_copyright_file = $_FILES['copyright'];
		$upload_overrides = array( 'test_form' => false );

		$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
		$move_copyright_file = wp_handle_upload( $uploaded_copyright_file, $upload_overrides );
		$author_issue_paper['paper'] = json_encode($movefile);
		$author_issue_paper['copyright'] = json_encode($move_copyright_file);
		$author_issue_paper['reviewer_new'] = '';
		$author_issue_paper['reviewer_id'] = '';
		$author_issue_paper['user_id'] = get_current_user_id();
		$author_issue_paper['issue_id'] = $_POST['issue_id'];
		if($_POST['reviewer1'] !=0 || $_POST['reviewer2'] !=0 || $_POST['reviewer3'] !=0 ){
			$author_issue_paper['reviewer_id'] = $_POST['reviewer1'].','.$_POST['reviewer2'].','.$_POST['reviewer3'];
		}
		if($_POST['reviewer1_name'] || $_POST['reviewer2_name'] || $_POST['reviewer3_name'] || $_POST['reviewer1_email'] || $_POST['reviewer2_email'] || $_POST['reviewer3_email'] || $_POST['reviewer1_phno'] || $_POST['reviewer2_phno'] || $_POST['reviewer3_phno']){
			$new_reviewer[1]['reviewer1_name'] = $_POST['reviewer1_name'];
			$new_reviewer[1]['reviewer1_email'] = $_POST['reviewer1_email'];
			$new_reviewer[1]['reviewer1_phno'] = $_POST['reviewer1_phno'];
			$new_reviewer[2]['reviewer2_name'] = $_POST['reviewer2_name'];
			$new_reviewer[2]['reviewer2_email'] = $_POST['reviewer2_email'];
			$new_reviewer[2]['reviewer2_phno'] = $_POST['reviewer2_phno'];
			$new_reviewer[3]['reviewer3_name'] = $_POST['reviewer3_name'];
			$new_reviewer[3]['reviewer3_email'] = $_POST['reviewer3_email'];
			$new_reviewer[3]['reviewer3_phno'] = $_POST['reviewer3_phno'];
			$author_issue_paper['reviewer_new'] = json_encode($new_reviewer);
		}
		$author_issue_paper['status'] = 'recieved';
		$date = date('Y-m-d H:i:s');
		$statusDate = 'recievedDate';
		$author_issue_paper[$statusDate] = $date;
		if ( $movefile && ! isset( $movefile['error'] ) && $move_copyright_file && ! isset( $move_copyright_file['error'] ) ) {
			$data = AuthorIssuePaper::create($author_issue_paper);
			echo json_encode(array('success'=>'true'));
			exit;
		}
		echo json_encode(array('success'=>'false'));
		exit;
}

add_action('wp_ajax_college_author_paper_resubmitted', 'college_author_paper_resubmitted');

function college_author_paper_resubmitted()
{
	$author_id 	= get_current_user_id();
	$paper_id 	= $_POST['paper_id'];
	
	$uploadedfile = $_FILES['paper_template'];
	$upload_overrides = array( 'test_form' => false );
	
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	if ( $movefile && ! isset( $movefile['error'] )) {
		$authorIssuePaperReviewer = AuthorIssuePaper::where('id', $paper_id);

		$author_issue_paper['paper'] = json_encode($movefile);
		$author_issue_paper['status'] = 'resubmitted';
		$date = date('Y-m-d H:i:s');
		$statusDate = 'resubmittedDate';
		$author_issue_paper[$statusDate] = $date;
		$data = $authorIssuePaperReviewer->update($author_issue_paper);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	echo json_encode(array('success'=>'false'));exit;
}

add_action('wp_ajax_college_author_paper_tn_submitted', 'college_author_paper_tn_submitted');

function college_author_paper_tn_submitted()
{
	$author_id 	= get_current_user_id();
	$paper_id 	= $_POST['paper_id'];
	$tn_no 	= $_POST['tn_no'];
	
	$uploadedfile = $_FILES['tn_photo'];
	$upload_overrides = array( 'test_form' => false );
	
	$movefile = wp_handle_upload( $uploadedfile, $upload_overrides );
	if ( $movefile && ! isset( $movefile['error'] )) {
		$authorIssuePaperReviewer = AuthorIssuePaper::where('id', $paper_id);

		$author_issue_paper['tn_photo'] = json_encode($movefile);
		$author_issue_paper['status'] = 'transactionSubmitted';
		$author_issue_paper['tn_no'] = $tn_no;
		$date = date('Y-m-d H:i:s');
		$statusDate = 'transactionSubmittedDate';
		$author_issue_paper[$statusDate] = $date;
		$data = $authorIssuePaperReviewer->update($author_issue_paper);
		echo json_encode(array('success'=>'true'));
		exit;
	}
	echo json_encode(array('success'=>'false'));exit;
}


