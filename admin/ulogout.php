<?php @session_start();
	//require('config.php');
	$usrLevId	=	$_SESSION['admin_Id']; 
		unset($_SESSION['admin_Id']);
 	unset($_SESSION['admin_Name']);
		session_unset(); 
		session_destroy();
			//$index = INDEX_URL;
			header("Location:index.php");
			
			
		

?>	