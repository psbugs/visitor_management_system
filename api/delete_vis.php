<?php
session_start(); 
require_once '../model/visitor.php';
$vis=new visitor();

if($vis->delete_visitor($_GET)){
		echo "success";

}
else
	echo "fail";

?>