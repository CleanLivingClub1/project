<?php
require_once BASE_PATH.'/model/dbconfig/class.mprocess.php';
require_once BASE_PATH.'/model/dbconfig/constants.php';
/***
*	Class Name Is Admin	
*/


class Admin{

    private $logObj;
	private $dbObj;
	
	/**
	*   Log Variable Declaration
	*/
	
	private $emergency			= EMERGENCY_ACTION_REQUIRED;
	private $alert				= ALERT; 
	private $errors				= ERRORS;
	private $warnings			= WARNINGS;
	private $notices			= NOTICES;
	private $information		= INFORMATION;	
	
	/**
	 *	Tables Declaration .
	 */
	
	private $tbmealtype	 = TABLE_MEAL_TYPE;
	private $tbmealiteams= TABLE_MEAL_ITEAMS;
	private $tbAdmin	 = TABLE_USERS;
	
	/**
	* List of functions as below.
	*	adminLoginData()	selectTestimonialData()		insertTestimonialData()
	*
	*/
	
    public function __construct(){
	
		$this->dbObj  	     	= new DataBasePDO();
		$this->logObj		 	= new Logging();
    }
	public function adminLoginData($valArray)
	{
		$adminName				=	$valArray['username'];
		$password				=	$valArray['password'];
		$whereArry				= array("`username`='$adminName'");
		$columnArray			= array('username','password','type_id');
		$result       = $this->dbObj->selectData($this->tbAdmin,$whereArry,$columnArray);
		if($result[0]['password']==sha1($password) &&  $result[0]['type_id']==1)
		{
			$_SESSION['admin']=$result[0]['username'];
			return $result;
		}
		else
			return 0;
	}
	public function selectMealTypeData()
	{
		$columnArray			= array('id','name');
		$getMealtypes			=	$this->dbObj->selectData($this->tbmealtype,1,$columnArray);
		return $getMealtypes;
	}
	public function insertMealTypeData($valArray)
	{
		$save					=	$this->dbObj->insertData($this->tbmealtype,$valArray);
		return $save;
	}
	public function editMealTypeData($id)
	{
		$whereArry				= array("`id`=$id");
		$columnArray			= array('id','name');
		$get      				= $this->dbObj->selectData($this->tbmealtype,$whereArry,$columnArray);
		return $get;
	}
	public function updateEditMealTypeData($valArray)
	{
		$id						= $valArray['id'];
		$columnArray['name']	= $valArray['name'];
		$whereArry				= array("`id`='$id'");
	
		$update    				= $this->dbObj->updateData($this->tbmealtype,$columnArray,$whereArry);
		return $update;
	}
	public function deleteMealTypeData($id)
	{
		$whereArry				= array("`id`=$id");
		$delete      			= $this->dbObj->deleteData($this->tbmealtype,$whereArry);
		return $delete;
	}
	public function selectMealIteamsData()
	{
		$sql  = 'SELECT
						mealiteams.id,
						mealtype.name as mealtypename,
						mealiteams.title,
						mealiteams.description,
						mealiteams.picture,
						mealiteams.video
				FROM
						'.$this->tbmealtype.' AS mealtype,
						'.$this->tbmealiteams.' AS mealiteams
				WHERE
						mealiteams.mealtype_id = mealtype.id
        ';
        $result = $this->dbObj->getAllResults($sql);
		return $result;
	}
	public function insertMealIteamsData($value)
	{
		$save					=	$this->dbObj->insertData($this->tbmealiteams,$value);
		return $save;	
	}
	public function editMealIteamsData($id)
	{
		$whereArry				= array("`id`=$id");
		$columnArray			= array('id','mealtype_id','title','description','picture','video');
		$get      				= $this->dbObj->selectData($this->tbmealiteams,$whereArry,$columnArray);
		return $get;
	}
	public function updateEditMealIteamsData($valArray)
	{
		$id						= $valArray['id'];
		$columnArray['mealtype_id']	= $valArray['mealtype_id'];
		$columnArray['title']		= $valArray['title'];
		$columnArray['description']	= $valArray['description'];
		$columnArray['picture']		= $valArray['picture'];
		$columnArray['video']		= $valArray['video'];
		$whereArry				= array("`id`='$id'");
		$update    				= $this->dbObj->updateData($this->tbmealiteams,$columnArray,$whereArry);
		return $update;
	}
	public function deleteMealIteamsData($id)
	{
		$whereArry				= array("`id`=$id");
		$delete      			= $this->dbObj->deleteData($this->tbmealiteams,$whereArry);
		return $delete;
	}
	
	
}
?>
