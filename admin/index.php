<?php

	require('../view/config.php');
	include_once BASE_PATH.'view/codeinclude.php';
	require_once BASE_PATH.'/controller/adminfunctions.php';
	
	$adminObj  	= new adminFunct();
	
	if(isset($_REQUEST['login']))
	{
		
		$valArray['username']=$_POST['username'];
		$valArray['password']=$_POST['password'];
		$result=$adminObj->adminLoginCheck($valArray);
		if($result)
		{
		$smarty->display('file:[admin]dashboard.tpl'); die();
		}
		else
		{
			$smarty->assign("logfail","Invalid Username/Password");
		}
	}
				
	
	$smarty->display('file:[admin]index.tpl');
			
?>
