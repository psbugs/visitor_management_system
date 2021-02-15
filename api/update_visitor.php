<?php
session_start(); 
require_once '../model/visitor.php';
$vis=new visitor();
if($vis->update_visitor($_POST)){
		echo "success";

}
else
	echo "fail";

?>