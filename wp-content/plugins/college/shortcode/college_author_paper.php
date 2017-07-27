<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_AUTHOR_PAPER]
 */

use App\AuthorIssuePaper;
use App\AuthorIssuePaperReviewer;
use App\PdfGeneration;
use App\Issue;
use App\Journal;
use App\Volume;


add_shortcode('COLLEGE_AUTHOR_PAPER', 'college_author_paper_shortcode');
function college_author_paper_shortcode($atts) {
	$user_role = get_current_user_role(get_current_user_id());
	$user_role = $user_role[0];
	$author_paper = AuthorIssuePaper::where('id', '=', $_GET['id'])->get()->toArray();
	$pdfGeneration = PdfGeneration::where('author_issue_paper_id', '=', $_GET['id'])->get()->toArray();
	$author_paper = $author_paper[0];
	$issue = Issue::where('id', '=', $author_paper['issue_id'])->get()->toArray();
	$journalName = Journal::where('id', '=', $issue[0]['journal_id'])->value('name');
	$volumeName = Volume::where('id', '=', $issue[0]['volume_id'])->value('name');
	$authorIssuePaperReviewer = AuthorIssuePaperReviewer::where('author_issue_paper_id', $_GET['id'])->get()->toArray();
	
	$reviewer1 = $reviewer2 = $reviewer3 = '';
	if($author_paper['reviewer_new']){
		$reviewer_new = json_decode($author_paper['reviewer_new'],1);
		$reviewer1 = $reviewer_new[1]['reviewer1_name'].PHP_EOL.$reviewer_new[1]['reviewer1_email'].PHP_EOL.$reviewer_new[1]['reviewer1_phno'];
		$reviewer2 = $reviewer_new[2]['reviewer2_name'].PHP_EOL.$reviewer_new[2]['reviewer2_email'].PHP_EOL.$reviewer_new[2]['reviewer2_phno'];
		$reviewer3 = $reviewer_new[3]['reviewer3_name'].PHP_EOL.$reviewer_new[3]['reviewer3_email'].PHP_EOL.$reviewer_new[3]['reviewer3_phno'];
	}
	if($author_paper['reviewer_id']){
		$reviewer_id = explode(",",$author_paper['reviewer_id']);
		if($reviewer_id[0]){
			$user_info  = get_userdata($reviewer_id[0]);
			$reviewer1 = $user_info->user_login;
		}
		if($reviewer_id[1]){
			$user_info  = get_userdata($reviewer_id[1]);
			$reviewer2 = $user_info->user_login;
		}
		if($reviewer_id[2]){
			$user_info  = get_userdata($reviewer_id[2]);
			$reviewer3 = $user_info->user_login;
		}
	}
	$args = array('role__in' => array('reviewer'));
	$users = get_users( $args );
	$args = array('role__in' => array('author'));
	$author_users = get_users( $args );
	foreach ($author_users as $key) {
		$author_user[$key->ID] = $key->data->user_nicename.' &nbsp;&nbsp; --->  &nbsp;&nbsp; '.$key->data->user_login;
	}
	$issueActiveList = Issue::where('active', '=', 1)->where('status', '=', 0)->get()->toArray();
	if($user_role == "reviewer"){
		$authorIssuePaperReviewer = AuthorIssuePaperReviewer::where('author_issue_paper_id', $_GET['id'])->where('user_id', get_current_user_id())->get()->toArray();
		$authorIssuePaperReviewer = $authorIssuePaperReviewer[0];
	}
	ob_start();
	include_once 'template/college_author_paperpage.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	return $template_content;
}

add_action('wp_ajax_college_author_paper', 'college_author_paper');

function college_author_paper()
{
		/* Create New One */
		
		if($_POST['status'] == 'recieved'){

			if((int)$_POST['reviewer1'])
				$reviewer[] = (int)$_POST['reviewer1'];
			if((int)$_POST['reviewer2'])
				$reviewer[] = (int)$_POST['reviewer2'];
			if((int)$_POST['reviewer3'])
				$reviewer[] = (int)$_POST['reviewer3'];
			$reviewer = array_unique($reviewer);
			
			foreach ($reviewer as $key => $value) {
				$authorIssuePaperReviewer['author_issue_paper_id'] = $_POST['paper_id'];
				$authorIssuePaperReviewer['user_id'] = $value;
				AuthorIssuePaperReviewer::create($authorIssuePaperReviewer);
				$user_info = get_userdata($value);
				$to = $user_info->user_email;
				$user_name = $user_info->user_nicename;
				
				$paper_referer_no = AuthorIssuePaper::where('id', '=', $_POST['paper_id'])->value('paper_referrer_no');
				$subject = 'Thanks for Acceptance to Review Manuscript ID # '.$paper_referer_no;
				$headers = array('Content-Type: text/html; charset=UTF-8');
				ob_start();
				include 'template/mail/PaperAssignToReviewer.php';
				$template_content = ob_get_contents();
				ob_end_clean();
				wp_mail( $to, $subject, $template_content, $headers );
				sleep(2);
			}
			$authorIssuePaper = AuthorIssuePaper::where('id', $_POST['paper_id']);
			$authorIssuePapers['status'] = 'review';
			$date = date('Y-m-d H:i:s');
			$statusDate = 'reviewDate';
			$authorIssuePapers[$statusDate] = $date;
			$data = $authorIssuePaper->update($authorIssuePapers);
			echo json_encode(array('success'=>'true'));
			exit;
		} else {
			$authorIssuePaper = AuthorIssuePaper::where('id', $_POST['paper_id']);
			$user_id = AuthorIssuePaper::where('id', $_POST['paper_id'])->value('user_id');
			
			$authorIssuePapers['status'] = $_POST['status'];
			$date = date('Y-m-d H:i:s');
			$statusDate = $_POST['status'].'Date';
			$authorIssuePapers[$statusDate] = $date;
			$authorIssuePapers['comment'] = $_POST['comment'];
			$authorIssuePapers['published_date'] = $_POST['publishedDate'];
			$data = $authorIssuePaper->update($authorIssuePapers);
			if($_POST['status'] == 'published'){
				$user_info = get_userdata($user_id);
				$to = $user_info->user_email;
				$user_name = $user_info->user_nicename;
				
				$paper_referer_no = AuthorIssuePaper::where('id', '=', $_POST['paper_id'])->value('paper_referrer_no');
				$issue_id = AuthorIssuePaper::where('id', '=', $_POST['paper_id'])->value('issue_id');
				$paper_title = Issue::where('id', '=', $issue_id)->value('name');
				$subject = 'Congratulations to Author/s';
				$headers = array('Content-Type: text/html; charset=UTF-8');
				ob_start();
				include_once 'template/mail/PaperStatusPublish.php';
				$template_content = ob_get_contents();
				ob_end_clean();
				wp_mail( $to, $subject, $template_content, $headers );
			}
			echo json_encode(array('success'=>'true'));
			exit;
		}
}
add_action('wp_ajax_college_author_paper_reviewer', 'college_author_paper_reviewer');

function college_author_paper_reviewer()
{
	$reviewer_id 	= get_current_user_id();
	$comment 		= $_POST['comment'];
	$strength 		= $_POST['strength'];
	$weekness 		= $_POST['weekness'];
	$radiovalues 	= $_POST['values'];
	$status 		= $_POST['status'];
	$paper_id 		= $_POST['paper_id'];
	$authorIssuePaperReviewer = AuthorIssuePaperReviewer::where('author_issue_paper_id', $paper_id)->where('user_id', $reviewer_id);
	$authorIssuePaperReviewers['status'] 		= $status;
	$authorIssuePaperReviewers['comment'] 		= $comment;
	$authorIssuePaperReviewers['strength'] 		= $strength;
	$authorIssuePaperReviewers['weekness'] 		= $weekness;
	$authorIssuePaperReviewers['radiovalues'] 	= $radiovalues;
	$data = $authorIssuePaperReviewer->update($authorIssuePaperReviewers);
	$user_info = get_userdata($reviewer_id);
	$to = $user_info->user_email;
	$user_name = $user_info->user_nicename;
	
	$paper_referer_no = AuthorIssuePaper::where('id', '=', $_POST['paper_id'])->value('paper_referrer_no');
	$issue_id = AuthorIssuePaper::where('id', '=', $_POST['paper_id'])->value('issue_id');
	$paper_title = Issue::where('id', '=', $issue_id)->value('name');
	$subject = 'Thanks for Review';
	$headers = array('Content-Type: text/html; charset=UTF-8');
	ob_start();
	include_once 'template/mail/ReviewerStatusChange.php';
	$template_content = ob_get_contents();
	ob_end_clean();
	wp_mail( $to, $subject, $template_content, $headers );
	echo json_encode(array('success'=>'true'));
	exit;
}