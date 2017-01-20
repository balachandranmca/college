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
