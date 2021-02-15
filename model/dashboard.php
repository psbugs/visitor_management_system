<?php require_once 'Data.php';
class Dashboard extends Data{
public function	__construct(){
	parent::__construct();

	}
	public function countEmployee(){
		$sql="select count(*) as emp from employee";
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data['emp'];
	}
	public function countDepartment(){
		$sql="select count(*) as emp from department";
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data['emp'];
	}
	public function countVisitortillDay(){
		$sql="select count(*) as emp from visitor";
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data['emp'];
	}
	public function countVisitorlast7Day(){
		$d1=strtotime("now");
		$d2=strtotime("-7 days");
		$d11=date('Y-m-d h:i:s',$d1);
		$d22=date('Y-m-d h:i:s',$d2);
	//	echo date('Y-m-d h:i:s',$d1)."<br/>".date('Y-m-d h:i:s',$d2);
		$sql="select count(*) as emp from visitor where intime between '$d22' and '$d11'";
		//echo $sql;
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data['emp'];
	}
	public function countVisitorlastDay(){
		$d1=strtotime("yesterday 23:59:59");
		$d2=strtotime("yesterday 0:0:0");
		$d11=date('Y-m-d H:I:s',$d1);
		$d22=date('Y-m-d H:I:s',$d2);

		$sql="select count(*) as emp from visitor where intime between '$d22' and '$d11'";
	//echo $sql;
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data['emp'];
	}
	public function countVisitortoDay(){
		$d1=strtotime("now");

		$d11=date('Y-m-d',$d1);


		$sql="select count(*) as emp from visitor where intime like '$d11%'";
	//echo $sql;
		$result=$this->con->query($sql);
		$data=$result->fetch_assoc();
		return $data['emp'];
	}
}
?>
