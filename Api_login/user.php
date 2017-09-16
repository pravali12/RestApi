<?php
require_once("dbcontroller.php");
/* 
A domain Class to demonstrate RESTful web services
*/
Class User {
	//private $mobiles = array();
	public function getAllusers()
	{
			$query = 'SELECT * FROM user';
		$dbcontroller = new DBController();
		$mobiles = $dbcontroller->executeSelectQuery($query);
		return json_encode($mobiles);
	}

	public function addusers($vws,$cakey,$cskey,$sakey,$sskey){
			
			$query = "insert into user (vws,cakey,cskey,sakey,sskey) values ('" . $vws ."','". $cakey ."','". $cskey ."','". $sakey ."','". $sskey ."')";
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			if($result != 0)
			{
				$result = array('success'=>1);
				return json_encode($result);
			}
	}
	
	public function deleteUser($id)
	{
			$query = 'DELETE FROM user WHERE id = '.$id;
			$dbcontroller = new DBController();
			$result = $dbcontroller->executeQuery($query);
			if($result != 0)
			{
				$result = array('success'=>1);
				return $result;
			}
		
	}
	
	public function editUser($id){
		
			$query = "UPDATE user SET name = '".$name."',mobileno = '". $mobileno ."' WHERE id = ".$id;
			$dbcontroller = new DBController();
			$result= $dbcontroller->executeQuery($query);
			if($result != 0)
			{
				$result = array('success'=>1);
				return $result;
			}
	}
	
}
?>