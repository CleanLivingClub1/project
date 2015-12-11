<?php

	require('../view/config.php');
	include_once BASE_PATH.'view/codeinclude.php';
	require_once BASE_PATH.'/controller/adminfunctions.php';
	
	$adminObj  	= new adminFunct();
	if(isset($_SESSION['admin']))
	{
		
		if(isset($_REQUEST['addnewtype']))
		{
			$smarty->display('file:[admin]mealstypeadd.tpl');die();
		}
		if(isset($_REQUEST['savenewtype']))
		{
			$valArray['name']		= $_REQUEST['tname'];
			$savenewtest			= $adminObj->insertMealType($valArray);
		}
		unset($_REQUEST['savenewtype']);
		
		if(isset($_REQUEST['edittype']))
		{
			$id						= $_REQUEST['edittype'];
			$gettestimonialbyid		= $adminObj->editMealType($id);
			$smarty->assign("tdata",$gettestimonialbyid);
			$smarty->display('file:[admin]mealstypeedit.tpl');die();
		}
		if(isset($_REQUEST['saveedittype']))
		{	
			$valArray['id']			= $_REQUEST['id'];
			$valArray['name']		= $_REQUEST['tname'];
			$savenewtest			= $adminObj->updateEditMealType($valArray);
		}
		if(isset($_REQUEST['deletetype']))
		{
			$id						= $_REQUEST['deletetype'];
			$deletetestimonialbyid		= $adminObj->deleteMealType($id);
			echo "<script>location.reload();</script>";
			die();
		}
	$mealtype					= $adminObj->selectMealType();	
	$smarty->assign("mealtype",$mealtype);
	$smarty->display('file:[admin]mealstypes.tpl');
	}
	else
		$smarty->display('file:[admin]index.tpl');
?>
