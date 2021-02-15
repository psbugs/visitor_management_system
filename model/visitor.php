
<?php

require_once 'Data.php';
class visitor extends Data
{
	public function __construct()
	{
		parent::__construct();
	}

	public function getAllVisitors()
	{
		$sql="select * from visitor";
		$result=$this->con->query($sql);
		return $result;
	}
	public function getAllVisitorsByEid($eid)
	{
		$sql="select * from visitor where employee_id=$eid";
		$result=$this->con->query($sql);
		return $result;
	}

	public function add_visitor($post,$emp){
		$sql="INSERT INTO visitor( `name`, `email`, `mobile_no`, `department_id`, `employee_id`, `reason`, `intime`, `outtime`) VALUES ('".$post['name']."','".$post['email']."','".$post['mobile_no']."','".$emp['department_id']."','".$emp['employee_id']."','".$post['reason']."','".$post['intime']."','".$post['outtime']."')";
			$result=$this->con->query($sql);
		return true;
	}
	public function getVisitorById($post){
		$sql="select * from visitor where visitor_id=".$post['id'];
		$result=$this->con->query($sql);
		return $result;
	}
	public function update_visitor($post){
		$sql="update visitor set name='".$post['v_name']."' where visitor_id=".$post['v_id'];
		$result=$this->con->query($sql);
		return true;
	}
	public function delete_visitor($post){
		$sql="delete from  visitor where visitor_id=".$post['id'];
		$result=$this->con->query($sql);
		return true;
	}
	public function getVisiterByYear($year){
	$d1=strtotime("1-1-$year");
	$d2=strtotime("31 dec $year");
	$d11=date('Y-m-d h:i:s',$d1);
	$d22=date('Y-m-d h:i:s',$d2);
	//	echo date('Y-m-d h:i:s',$d1)."<br/>".date('Y-m-d h:i:s',$d2);
		$sql="select *from visitor where intime between '$d11' and '$d22'";
		$result=$this->con->query($sql);
		return $result;
		}
}

?>
