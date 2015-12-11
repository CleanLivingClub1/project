<?php

/***
 *	File For Creating The Constants
 *	License	GNU General Public License
 *
 */

/****
 *	
 *	Checking Whether Localhost Is Using
 */

if (isset($_SERVER['HTTP_HOST']) && ($_SERVER['HTTP_HOST'] == "localhost" || $_SERVER['HTTP_HOST'] == "127.0.0.1")) {
	
	#	 Define For Database Server  *	 Database Server	= localhost
	
	DEFINE('DB_SERVER', "localhost");
	
	#	 Define For Database User Name *	 Database User Name	= root
	 
	DEFINE('DB_USER', "root");
	
	# Define For Database User Password *	 Database Password	=   ''
	 
	DEFINE('DB_PASS', "");
	
	# Define For Database Name  *	 Database Name	=  sdar
	 
	DEFINE('DB_DATABASE', "cleanlivingclub");
	
	# for ini file path
	define('INI_PATH',BASE_PATH.'view/ini/');
	
	define('USER_IMAGE_PATH',BASE_PATH.'view/user/image/');
	
	define('USER_UPLOAD_PATH',BASE_PATH.'view/display/upload/');
	
	define('SOCIAL_UPLOAD',BASE_PATH.'view/display/smarty/images/');
		
	# for error log files
	define('LOG_FILE_PATH', BASE_PATH.'model/applog');
	
	define('ERROR_LOG_FILE_PATH', BASE_PATH.'controller/errorlog');
	
	
		
} else {
	
	#	 Define For Database Server * Database Server	= localhost
	DEFINE('DB_SERVER', "localhost");
	
	#	 Define For Database User Name * Database User Name	= seedtoj1_sdar
	
	DEFINE('DB_USER', "lovegeni_venkat");
	
	#	 Define For Database User Password  *	 Database Password	=   ''
	
	DEFINE('DB_PASS', "clc.123");
	
	#	 Define For Database Name *	 Database Name	=  sdar
	
	DEFINE('DB_DATABASE', "lovegeni_clc_dev");
		 
	# for ini file path 
	define('INI_PATH',BASE_PATH.'view/ini/');
	
	define('USER_IMAGE_PATH',BASE_PATH.'view/user/image/');
	
	define('USER_UPLOAD_PATH',BASE_PATH.'view/display/upload/');
	
	
	
	# for error log files
	define('LOG_FILE_PATH', BASE_PATH.'model/applog');
	
	define('ERROR_LOG_FILE_PATH', BASE_PATH.'controller/errorlog');
	
	
}

	DEFINE('LIMIT',5);
	


/****For User Update Authentication*****/
	DEFINE('USERNAME',"sudheer");
	DEFINE('PASSWORD',"Gedm@Dvts");
	
/***
 *	(1)Basic Tables
 *	Tables Code ::: aa
 * 	Total 14 Tables
 */


DEFINE('TABLE_MEAL_TYPE',"meal_type");
DEFINE('TABLE_MEAL_ITEAMS',"meal_items");
DEFINE('TABLE_USERS',"users");




DEFINE('UW','Please Enter valid user name');
DEFINE('PW',"Please Enter valid passwored");
DEFINE('LW',"Please Enter valid Level");


/**************** Logging Files ***************/
/*
 * define the log level as below
 * 0 for Emergency Action Required
 * 1 for Alerts
 * 2 for Errors
 * 3 for Some warnings
 * 4 for Noties
 */

define("LOG_MAX_LEVEL", 5);
define("LOG_MIN_LEVEL", 0);
define("LOG_LEVEL", 5);
define("EMERGENCY_ACTION_REQUIRED",0);
define("ALERT",1);
define("ERRORS",2);
define("WARNINGS",3);
define("NOTICES",4);
define("INFORMATION",5);


DEFINE('RESPONSE', "The user does not allow the response");
DEFINE('MESSAGE', "already exist");




?>

