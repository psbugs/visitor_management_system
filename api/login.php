<?php
session_start(); 
require_once '../model/Employee.php';
$emp=new Employee();
if($emp->checkLoign($_POST)){
	$_SESSION['uname']=$_POST['email_id'];
	echo "success";

}
else
	echo "fail";

?>