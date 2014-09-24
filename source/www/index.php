<?php
//define('LIB_PATH', '/Users/developer/Documents/try/ZendFrameworkExt/');
define('LIB_PATH', '/Users/lyq/Public/MyWebProjects/ZendFrameworkExt/');
define('SITE_PATH', dirname($_SERVER['DOCUMENT_ROOT']));
define('SITE_LIB_PATH', SITE_PATH.'/lib');
define('ETC_PATH', SITE_PATH.'/etc');
define('APPS_PATH', SITE_PATH.'/appfrontend');
define('CACHE_PATH',SITE_PATH.'/cache');
define('WWW_PATH',SITE_PATH.'/www');
define('TEMP_PATH', WWW_PATH.'/tmp');
define('TEMP_DIR', '/tmp/');


error_reporting(E_ALL & ~E_NOTICE & ~E_USER_NOTICE);
header('content-type: text/html;charset=utf-8');
date_default_timezone_set('PRC');

//set lib include path
set_include_path(
    join(PATH_SEPARATOR, array(
        SITE_LIB_PATH,
        LIB_PATH,
        get_include_path()
    ))
);

//autoloader
require_once 'Zend/Loader/Autoloader.php';
Zend_Loader_Autoloader::getInstance()->setFallbackAutoloader(true);

//global config
$config = new Zend_Config_Ini(ETC_PATH.'/global.conf', 'frontend');	
Zend_Registry::set('config', $config);

//layout
Zend_Layout::startMvc(array(
    'layoutPath'    => SITE_PATH . '/layout',
    'layout'        => 'frontend-layout',
    'viewSuffix'    => 'php'
));

//view & helper
$view = new Zend_View(array('encoding' => 'utf-8', 'helperPath' => LIB_PATH.'/view_helper'));
Zend_Controller_Action_HelperBroker::addPath(LIB_PATH.'/action_helpers');
Zend_Controller_Action_HelperBroker::addHelper(
	new Zend_Controller_Action_Helper_ViewRenderer(
		$view,
		array('viewSuffix' => 'php', 'neverController' => true)
	)
);

//start session
Zend_Session::start();

//controller front
$fc = Zend_Controller_Front::getInstance();
$fc->throwExceptions(false);

//load modules conf
$modules_conf = new Zend_Config_Ini(ETC_PATH.'/apps.conf', 'applications');
$modules = array();
foreach ($modules_conf->toArray() as $m)
{
	$modules[$m['name']] = APPS_PATH.$m['dir'].'/controllers';
}
$fc->setControllerDirectory($modules);
Zend_Registry::set('modules', $modules_conf);

//rewrite url
//UrlRouter::set_router($fc);

$router = $fc->getRouter();
$router->addRoute(
    'redirect',
    new Zend_Controller_Router_Route_Static(
        '',
        array('module' => 'index', 'controller' => 'index', 'action' => 'index')
    )
);

$fc->registerPlugin(new AuthPlugin());

$fc->dispatch();
