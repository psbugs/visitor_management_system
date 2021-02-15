<?php
session_start(); 
require_once '../model/Department.php';
$dept=new Department();

if($dept->delete_department($_GET)){
		echo "success";

}
else
	echo "fail";

?>