<?php 
require_once 'Data.php';
class Department extends Data{
public function	__construct(){
	parent::__construct();
	
	}
	public function getAllDepartments(){
		$sql="select * from department";
		$result=$this->con->query($sql);
		return $result;
	}
	public function add_department($post){
		$sql="insert into  department(d_name) values('".$post['d_name']."')";
		$result=$this->con->query($sql);
		return true;
	}
	public function delete_department($post){
		$sql="delete from  department where department_id=".$post['id'];
		$result=$this->con->query($sql);
		return true;
	}
	public function getDepartmentById($post){
		$sql="select * from department where department_id=".$post['id'];
		$result=$this->con->query($sql);
		return $result;
	}
	public function update_department($post){
		$sql="update department set d_name='".$post['d_name']."' where department_id=".$post['d_id'];
		$result=$this->con->query($sql);
		return true;
	}
	public function getFilteredDept($post){
		$sql="select * from department where d_name like '%".$post['key']."%'";
		$result=$this->con->query($sql);
		return $result;
	}
}
?>