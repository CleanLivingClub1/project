<?php

	require('../view/config.php');
	include_once BASE_PATH.'view/codeinclude.php';
	require_once BASE_PATH.'/controller/adminfunctions.php';
	
	$adminObj  	= new adminFunct();
	if(isset($_SESSION['admin']))
	{
		
		if(isset($_REQUEST['addnewtype']))
			
		{
				//print_r($_FILES); die();

			$mealtype					= $adminObj->selectMealType();	
			$smarty->assign("mealtype",$mealtype);
			$smarty->display('file:[admin]mealiteamsadd.tpl');die();
		}
		if(isset($_REQUEST['savenewmealiteams']))
		{
			//echo "<pre>";print_r($_REQUEST);echo "</pre>";die();
			$valArray['mealtype_id']		= $_REQUEST['mealtype'];
			$valArray['title']				= $_REQUEST['title'];
			$valArray['description']		= $_REQUEST['description'];
			$pictureName  					= $_FILES['picture']['name'];
			// basename($_FILES["picture"]["name"]);
			echo USER_UPLOAD_PATH. basename($_FILES["picture"]["name"])  ;
			if (move_uploaded_file($_FILES['picture']['tmp_name'],USER_UPLOAD_PATH.$pictureName)) 
			{
				$valArray['picture'] = $pictureName;
				echo "file sent";
			}
			else 
			{
				echo "file not sent";
			}
			$videoName  					= $_FILES['video']['name'];
			//echo $videoName  ;
			echo $_FILES['picture']['tmp_name'];
			echo USER_UPLOAD_PATH.$videoName;
			if (move_uploaded_file($_FILES['video']['tmp_name'],USER_UPLOAD_PATH.$videoName)) 
			{
				$valArray['video'] = $videoName;
				echo "file sent";
			}
			else 
			{
				echo "file not sent";
			}
			$savenewtest			= $adminObj->insertMealIteams($valArray);
		}
		unset($_REQUEST['savenewtype']);
		
		if(isset($_REQUEST['editmealitem']))
		{
			$id						= $_REQUEST['editmealitem'];
			$getmealiteamsbyid		= $adminObj->editMealIteams($id);
			$mealtype				= $adminObj->selectMealType();	
			$smarty->assign("mealtype",$mealtype);
			$smarty->assign("tdata",$getmealiteamsbyid);
			$smarty->display('file:[admin]mealitemedit.tpl');die();
		}
		if(isset($_REQUEST['saveeditmealitem']))
		{	
			$valArray['id']					= $_REQUEST['id'];
			$valArray['mealtype_id']		= $_REQUEST['mealtype'];
			$valArray['title']				= $_REQUEST['title'];
			$valArray['description']		= $_REQUEST['description'];
			$pictureName  					= $_FILES['picture']['name'];
			
			if(move_uploaded_file($_FILES['picture']['tmp_name'],USER_UPLOAD_PATH.$pictureName)) 
			{		
		            $valArray['picture'] = $pictureName;
		            echo "file sent";
			}
			else 	
			{
				echo "file not sent";
			}
			$videoName  					= $_FILES['video']['name'];
			if(move_uploaded_file($_FILES['video']['tmp_name'],USER_UPLOAD_PATH.$videoName)) 
			{	
		    $valArray['video'] = $videoName;	
			echo "file sent";	
			}	
			else
			{
			echo "file not sent";	
			}
			$savenewtest			= $adminObj->updateEditMealIteams($valArray);
		}
		if(isset($_REQUEST['deletemealitem']))
		{
			$id						= $_REQUEST['deletemealitem'];
			$deletetestimonialbyid		= $adminObj->deleteMealIteams($id);
			echo "<script>location.reload();</script>";
			die();
		}
	$mealiteams					= $adminObj->selectMealIteams();	
	//print_r($mealiteams);
	$smarty->assign("mealiteams",$mealiteams);
	$smarty->display('file:[admin]mealiteams.tpl');
	}
	else
		$smarty->display('file:[admin]index.tpl');
?>
