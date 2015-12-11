<?php

	require('../view/config.php');
	include_once BASE_PATH.'view/codeinclude.php';
	require_once BASE_PATH.'/controller/adminfunctions.php';
	if(isset($_SESSION['admin']))
	$smarty->display('file:[admin]meals.tpl');
	else
	$smarty->display('file:[admin]index.tpl');
?>
