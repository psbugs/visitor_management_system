<?php
session_start(); 
require_once '../model/Department.php';
$dept=new Department();
if($dept->update_department($_POST)){
		echo "success";

}
else
	echo "fail";

?>