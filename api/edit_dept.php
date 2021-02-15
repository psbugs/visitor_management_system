<?php
session_start(); 
require_once '../model/Department.php';
$dept=new Department();

$result=$dept->getDepartmentById($_GET);
$data=$result->fetch_assoc();
	

echo ' <p>Deparment Name : <input type="text" name="d_name" id="e_name" value="'. $data['d_name'].'"/>
          <input type="hidden" name="d_id" id="d_id" value="'.$data['department_id'].'" >';
?>