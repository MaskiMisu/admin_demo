<?php
class Framework {

	public static function run() {
		self::init();
		self::autoload();
		self::dispatch();
	}

	private static function init() {
		// define path constants
		define("DS", DIRECTORY_SEPARATOR);
		define("ROOT", getcwd() . DS);
		define("APP_PATH", ROOT . 'application' . DS);
 		define("FRAMEWORK_PATH", ROOT . "framework" . DS);
 		define("PUBLIC_PATH", ROOT . "public" . DS);
 		define("CONFIG_PATH", APP_PATH . "config" . DS);

	    define("CONTROLLER_PATH", APP_PATH . "controllers" . DS);
	    define("MODEL_PATH", APP_PATH . "models" . DS);
	    define("VIEW_PATH", APP_PATH . "views" . DS);

	    define("CORE_PATH", FRAMEWORK_PATH . "core" . DS);
	    define('DB_PATH', FRAMEWORK_PATH . "database" . DS);
	    define("LIB_PATH", FRAMEWORK_PATH . "libraries" . DS);
	    define("HELPER_PATH", FRAMEWORK_PATH . "helpers" . DS);
	    define("UPLOAD_PATH", PUBLIC_PATH . "uploads" . DS);

 		define("ASSETS_PATH", PUBLIC_PATH . "assets" . DS);
 		define("CSS_PATH", ASSETS_PATH . "css" . DS);
 		define("JS_PATH", ASSETS_PATH . "js" . DS);
 		define("IMG_PATH", ASSETS_PATH . "img" . DS);

 		// Define platform, controller, action, for example:
	    // index.php?p=admin&c=Goods&a=add

	    define("PLATFORM", isset($_REQUEST['p']) ? $_REQUEST['p'] : 'home');
	    define("CONTROLLER", isset($_REQUEST['c']) ? $_REQUEST['c'] : 'Index');
	    define("ACTION", isset($_REQUEST['a']) ? $_REQUEST['a'] : 'index');

	    define("CURR_CONTROLLER_PATH", CONTROLLER_PATH . PLATFORM . DS);
	    define("CURR_VIEW_PATH", VIEW_PATH . PLATFORM . DS);

	    // Load core classes
	    require CORE_PATH . "Controller.class.php";
	    require CORE_PATH . "Loader.class.php";
	    require DB_PATH . "Mysql.class.php";
	    require CORE_PATH . "Model.class.php";

	    // Load helpers classes
	    require HELPER_PATH . "General.class.php";

	    // Load configuration file
	    // $GLOBALS['config'] = include CONFIG_PATH . "config.php";

	    // Start session
	    session_start();
	}

	private static function autoload() {
		spl_autoload_register(array(__CLASS__, 'load'));
	}

	private static function load($classname) {
		if (substr($classname, -10) == 'Controller') {
			require_once CURR_CONTROLLER_PATH . "$classname.class.php";
		} else if (substr($classname, -5) == 'Model') {
			require_once MODEL_PATH . "$classname.class.php";
		}
	}

	// routing and dispatching
	private static function dispatch() {
		// Instantiate the controller class and call its action method
		$controller_name = CONTROLLER . "Controller";
		$action_name = ACTION . "Action";
		$controller = new $controller_name;
		$controller->$action_name();
	}
}
?>