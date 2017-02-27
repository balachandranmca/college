<?php
/*
 *  College Demo Page
 * eg: [COLLEGE_AUTHOR_PAPER]
 */

use App\AuthorIssuePaper;
use App\Issue;


add_shortcode('COLLEGE_AUTHOR_PAPER', 'college_author_paper_shortcode');
function college_author_paper_shortcode($atts) {
	$author_paper = AuthorIssuePaper::where('id', '=', $_GET['id'])->get()->toArray();
	$author_paper = $author_paper[0];
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
	$issueActiveList = Issue::where('active', '=', 1)->where('status', '=', 0)->get()->toArray();
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
			$reviewer1 = (int)$_POST['reviewer1'];
			$reviewer2 = (int)$_POST['reviewer2'];
			$reviewer3 = (int)$_POST['reviewer3'];
			
			if($reviewer2 && $reviewer2 != $reviewer1){
				
			}
		}
		$author_paper['status'] = 'recieved';
		$data = AuthorIssuePaper::create($author_issue_paper);
		echo json_encode(array('success'=>'true'));
		exit;
		
}


