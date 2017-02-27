<?php
/*
 *  loader for the plugin
 */



/*
 * Include the shortcodes included files
 */

include_once 'shortcode/shortcode-loader.php';

/*
 * Include the admin loader files
 */

include_once 'admin/admin-loader.php';

/*
 * Include global functions holding files
 */

include_once 'lib/general_functions.php';

add_role('journal', 'Journal', array('read' => true, 'level_0' => true));

add_role('editor', 'Editor', array('read' => true, 'level_0' => true));

add_role('user', 'User', array('read' => true, 'level_0' => true));

add_role('author', 'Author', array('read' => true, 'level_0' => true));

add_role('reviewer', 'Reviewer', array('read' => true, 'level_0' => true));