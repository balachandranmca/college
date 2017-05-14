<?php
/*
 *  College sub Menu actions
 */
add_action('admin_menu', 'Page_Settings_Menus');
/*
 *  submenu Fn added under Theme(Apperance main menu)
 */
function Page_Settings_Menus() {
	add_submenu_page('themes.php', 'Page Settings', 'Page Settings', 'manage_options', 'Page_Settings', 'Page_Settings');
}

function Page_Settings() {
	// Add the page name(ie used as key) and page title used as label in form
	// syntax "buzz_yourpageidentity_page" => "Title(Label) of the page displayed in admin option form"
	$page_options = array(
		
        "demo_page" => "College Demo Page",
        "college_login" => "College Login Page",		
        "college_journal" => "College Journal Page",
        "college_about_us" => "College About us Page",
		"college_contact_us" => "College Contact us Page",
		"college_slider" => "College Home Page Silder",
		"college_slider_list" => "College Home Page Silder List",
		"college_journal_list" => "College Journal List",
		"college_volume" => "College Volume",
		"college_volume_list" => "College Volume List",
		"college_issue" => "College Issue",
		"college_issue_list" => "College Issue List",
		"college_editor" => "College Editor",
		"college_editor_list" => "College Editor List",
		"college_journal_editor" => "College Journal Editor",
		"college_journal_editor_list" => "College Journal Editor List",
		"college_editor_board" => "College Editor Board",
		"college_call_for_paper" => "College Call for Paper",
		"college_general_settings" => "College General Settings",
		"college_processing_fees" => "College Processing Fees",
		"college_journal_view" => "College Journal View",
		"college_carosel_slider" => "College Carosel Slider",
		"college_carosel_slider_list" => "College Carosel Slider List",
		"college_document" => "College Document Upload",
		"college_withdrawal_procedure" => "College Withdrawal Procedure",
		"college_guidelines_author" => "College Guidelines to Author",
		"college_user_list" => "College User List",
		"college_jounal_issues_pages" => "College Journal Issues Pages",
		"college_jounal_issues_publish" => "College Journal Issues Publish",
		"college_jounal_issues_publish_list" => "College Journal Issues Publish List",
		"college_reviewer" => "College Reviewer",
		"college_reviewer_list" => "College Reviewer List",
		"college_author_issue_paper" => "College Author Issue Paper",
		"college_author_paper_list" => "College Author Paper List",
		"college_author_paper" => "College Author Paper",
		"college_reviewer_dashboard" => "College Reviewer Dashboard",
		"college_admin_dashboard" => "College Admin Dashboard",
		"college_admin_paper_status" => "College Admin Paper Status",
		"college_certificate" => "College_Certificate",
		"college_feedback" => "College_Feedback",
		"college_conference" => "College Advertise us page",
		"college_publish_download" => "College Publish Paper Download",
		"college_conference_list" => "College Advertise us List page"
	);

	if (isset($_POST['pagesubmit'])) {
		$pages = $_POST['pages'];
		update_option("buzz_page_alias", $pages);
	}
	$buzz_page_alias = get_option("buzz_page_alias");

	// storing the social media key)
	if (isset($_POST['keysubmit'])) {
		update_option("demo_option", $_POST['demo_option']);
	}
	include_once 'page_settingpage.php';
}
