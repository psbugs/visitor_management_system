<?php
session_start(); 
require_once '../model/Visitor.php';
require_once '../model/Employee.php';
$emp=new Employee();
$email=$_SESSION['uname'];
$emp_detail=$emp->getEmployeeByEmail($email);

$vis=new Visitor();
if($vis->add_visitor($_POST,$emp_detail)){
		echo "success";

}
else
	echo "fail";

?>