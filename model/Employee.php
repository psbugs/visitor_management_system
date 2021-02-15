<?php
require_once 'Data.php';
class Employee extends Data{
public function	__construct(){
	parent::__construct();
	
	}
	public function addEmployee($post){
		$name=$post['name'];
		$contact_no=$post['contact_no'];
		$email_id=$post['email_id'];
		$department_id=$post['department_id'];
		$password=$post['password'];
		$designation=$post['designation'];
		$sql="insert into employee(name,contact_no,email_id,department_id,password,designation)values('$name','$contact_no','$email_id',$department_id,'$password','$designation')";
		$this->con->query($sql);
		return true;
	}
	public function checkLoign($post){
		$email_id=$post['email_id'];
		$password=$post['password'];
		$sql="select * from employee where email_id='$email_id' and password='$password'";
		$result=$this->con->query($sql);
		if($result->num_rows>0)
			return true;
		else
			return false;
	}
	public function getEmployeeByEmail($email){
		$sql="select * from employee where email_id='$email'";
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data;
	}
	public function chgpwd($post){
			$e_id=$post['e_id'];
		$password=$post['opwd'];
		$npwd=$post['npwd'];
		$sql="select * from employee where employee_id=$e_id and password='$password'";
		$result=$this->con->query($sql);
		if($result->num_rows>0)
			{
				$sql="update employee set password='$npwd' where employee_id=$e_id";
				//echo $sql;
				$this->con->query($sql);
				return true;
			}
		else
			return false;	
	}
	public function addPic($pic,$eid){
		$sql="update employee set profile_pic='$pic' where employee_id=$eid";
		$result=$this->con->query($sql);
		
	}
}

?>