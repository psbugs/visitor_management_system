<?php 
require_once '../model/Employee.php';
$emp=new Employee();

$s=$_FILES['profile_pic']['tmp_name'];
$d="profilepic/".$_FILES['profile_pic']['name'];
if(move_uploaded_file($s,$d)){
$emp->addPic($d,$_POST['e_id']);
echo "file uploaded successfully";
}
else{
	echo "file uploading failed";
}
?>