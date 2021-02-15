<?php 
require_once '../model/Employee.php';
$emp=new Employee();
if($emp->addEmployee($_POST))
	echo "success";
else
	echo "fail";

?>