<?php
session_start(); 
require_once '../model/visitor.php';
$vis=new visitor();

$result=$vis->getVisitorById($_GET);
$data=$result->fetch_assoc();
	

echo ' <p>visitor Name : <input type="text" name="v_name" id="e_name" value="'. $data['name'].'"/>
	<p>visitor email : <input type="text" name="v_email" id="e_name" value="'. $data['email'].'"/>
	<p>visitor mobile : <input type="text" name="v_mobile_no" id="e_name" value="'. $data['mobile_no'].'"/>
	<p>visitor intime : <input type="text" name="v_intime" id="e_name" value="'. $data['intime'].'"/>
 	<input type="hidden" name="v_id" id="v_id" value="'.$data['visitor_id'].'" >';
?>