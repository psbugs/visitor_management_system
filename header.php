<!DOCTYPE html>
<html lang="en">
<head>
  <title>Visitor Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.15.2/js/all.js" data-auto-a11y="true"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="icons" href="icons/favicon.ico">
</head>
<body style="font-family:Ubuntu;background-color: #f8f1f1">
<br>
<div class="ts_message_popup ">
	<p class="ts_message_popup_text"></p>
</div>
<?php
require_once 'model\Department.php';
require_once 'model\Employee.php';



$dept=new Department();
$emp=new Employee();

?>
