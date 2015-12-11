<?php
	require_once BASE_PATH.'/model/admin/class.admin.php';
	

/***
	*	Class Name Is ModuleAccess
	*	Module Name Is ModuleAccess Module
	*	Database Table Names are  operations  module_access,usewr_access,admin_access
	* 	If You Want To See The Tables Structure open module.txt file
	*	Total Functions List(Names)
	*	
	*/


class adminFunct{

   private $emergency			= EMERGENCY_ACTION_REQUIRED;
	private $alert				= ALERT; 
	private $errors				= ERRORS;
	private $warnings			= WARNINGS;
	private $notices			= NOTICES;
	private $information		= INFORMATION;	
	public  $errorLogPath		= ERROR_LOG_FILE_PATH;
	
	public  $iniFilePath		= INI_PATH;
	
	
		
    public function __construct(){
	
		$this->logObj		 	= new Logging($this->errorLogPath);
		$this->adminFuObj  		= new Admin();
    }

	public function getIniBySectionField($section,$array,$fileName){
	
	
	
		$iniFile=$this->iniFilePath.$fileName;//filename need to chage according to your ini file name
		$iniAr = parse_ini_file($iniFile,true);	
	 
		if(is_array($iniAr)){
			for($i=0;$i<count($array);$i++){
				@$value[$array[$i]] =$iniAr[$section][$array[$i]];
			}	 
			
			if($value){
				return $value; 
			}else{
				return null;
			}
		 }else{
		 	return null;
		 }
   	}
	
	public function adminLoginCheck($valArray)
	{ 
		$result	= $this->adminFuObj->adminLoginData($valArray);
		return $result;
	}
	public function selectMealType()
	{
		$getTestimonials	=	$this->adminFuObj->selectMealTypeData();
		return $getTestimonials;
	}
	public function insertMealType($valArray)
	{
		$save	=	$this->adminFuObj->insertMealTypeData($valArray);
		return $save;
	}
	public function editMealType($id)
	{
		$get 	=	$this->adminFuObj->editMealTypeData($id);
		return $get;
	}
	public function updateEditMealType($valArray)
	{
		$update =	$this->adminFuObj->updateEditMealTypeData($valArray);
		return $update;
	}
	public function deleteMealType($id)
	{
		$delete =	$this->adminFuObj->deleteMealTypeData($id);
		return $delete;
	}
	public function selectMealIteams()
	{
		$getTestimonials	=	$this->adminFuObj->selectMealIteamsData();
		return $getTestimonials;
	}
	public function insertMealIteams($value)
	{
		$insert	=	$this->adminFuObj->insertMealIteamsData($value);
		return $insert;
	}
		public function editMealIteams($id)
	{
		$insert	=	$this->adminFuObj->editMealIteamsData($id);
		return $insert;
	}
	public function updateEditMealIteams($valArray)
	{
		$update =	$this->adminFuObj->updateEditMealIteamsData($valArray);
		return $update;
	}
	public function deleteMealIteams($id)
	{
		$delete =	$this->adminFuObj->deleteMealIteamsData($id);
		return $delete;
	}
	
}
?>