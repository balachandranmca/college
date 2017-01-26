<?php
/**
 * @package College Plugin
 * @version 1.0
 */
/*
Plugin Name: College
Plugin URI: www.ijrests.org
Description: College plugin
Author: JARVIS
Version: 1.0
Author URI: www.ijrests.org
 */

ob_start();
define('IS_BAG_PL_ROOT', true);
define('PLUGIN_DEVELOPER_MODE', true);
define('WP_BAG_PL_VERSION', '0.0.1');

define('WP_BAG_PL_DIR', dirname(plugin_basename(__FILE__)));
define('WP_BAG_PL_PATH', plugin_dir_path(__FILE__));
define('WP_BAG_PL_URL', plugin_dir_url(__FILE__));
define('WP_BAG_PL_IMAGE', plugin_dir_url(__FILE__) . 'images/');
define('WP_BAG_PL_JS', plugin_dir_url(__FILE__) . 'js/');



define('WP_BAG_PL_SHORTCODE', WP_BAG_PL_PATH . 'shortcode/');
define('WP_BAG_PL_SHORTCODE_TPL', WP_BAG_PL_SHORTCODE . 'template/');
define('WP_BAG_PL_CORE', WP_BAG_PL_PATH . 'core/');
define('WP_BAG_PL_LANG_DIR', WP_BAG_PL_PATH . 'langs/');

if(!isset($_SESSION)){session_start();}

require_once __DIR__.'/../../../vendor/autoload.php';

 
$capsule = new \Illuminate\Database\Capsule\Manager;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => DB_HOST,
    'database'  => DB_NAME,
    'username'  => DB_USER,
    'password'  => DB_PASSWORD,
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$capsule->setEventDispatcher(new \Illuminate\Events\Dispatcher(new \Illuminate\Container\Container));
$capsule->setAsGlobal();
$capsule->bootEloquent();

include_once 'plugin_loader.php';