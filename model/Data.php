<?php
class Data{
	public $con;
	public function __construct()
	{
		$this->con=new mysqli("localhost","root","","visitor_mgmt");
		if ($this->con->connect_error) 
		{
  				die("Connection failed: " . $this->con->connect_error);
		}
		
	}
}
$obj=new Data();
?>