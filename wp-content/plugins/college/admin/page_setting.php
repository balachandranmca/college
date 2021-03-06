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
        "college_login_page" => "College Login Page",

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
