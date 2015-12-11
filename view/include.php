<?php
/**
 * This is the main page to configure the root paths 
 * session configuration
 * etc.
 */
#for session start.
@session_start();

//error_reporting(0);

#USER LEVALS
define('ADMIN', '1');
define('EMPLOYEE', '2');
define('CLIENT', '3');
define('INDIVIDUAL', '4');



if (isset($_SERVER["HTTP_HOST"]) && $_SERVER["HTTP_HOST"] == 'localhost') {
	
	define('LOCAL_WEBSITE','cleanlivingclub');
	
	define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/'.LOCAL_WEBSITE.'/');
		
	define('ADMIN_PATH' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/admin/');
	
	define('ADMIN_TEMPLATE' ,'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/display/admin/');
	
	define('SERVER_PATH' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/');
	
	define('INDEX_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/');
	
	define('TEMPLATE' ,'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/display/');
	
	define('DASHBOARD_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/'.LOCAL_WEBSITE.'/view/dashboards/');
	
} else {

	define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'].'/');
		
	define('SERVER_PATH', 'http://'.$_SERVER['HTTP_HOST'].'/view/');

	define('ADMIN_PATH' , 'http://'.$_SERVER['HTTP_HOST'].'/admin/');
	
	define('INDEX_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/');
	
	define('TEMPLATE' , 'http://'.$_SERVER['HTTP_HOST'].'/view/display/');
	
	define('ADMIN_TEMPLATE' , 'http://'.$_SERVER['HTTP_HOST'].'/view/display/admin/');

	define('DASHBOARD_URL' , 'http://'.$_SERVER['HTTP_HOST'].'/view/dashboards/');
	
}

?>
