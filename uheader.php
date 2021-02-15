
<!DOCTYPE html>
<head>
  <title>Project Dashboard</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
 <link rel="stylesheet" type="text/css" href="j/fontawesome-webfont.woff2">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="icons" href="icons/favicon.ico">
<?php
session_start();
require_once 'model\Employee.php';
require_once 'model\Department.php';
require_once 'model\visitor.php';
require_once 'model\Dashboard.php';
$dept=new Department();
$emp=new Employee();
$vis=new visitor();
$dboard=new Dashboard();

$email=$_SESSION['uname'];
$emp_detail=$emp->getEmployeeByEmail($email);
print_r($emp_detail);



?>
  <style type="text/css">

 	.hp
{
	margin-top: 40px;
}
.nav-link
{
	padding: .5rem 0rem;
}

.card_width
{
	max-width: 18rem;
}
.bg-danger
{
	background-color: #3536dc!important;
}
.footer {
	position: fixed;
	left: 0;
	bottom: 0;
	width: 100%;
	background-color: red;
	color: white;
	text-align: center;

 }
  .navbar .head{
  	height: 60px;
    margin-left: 140px;
    padding-top: 10px;
  	display: flex;
  	justify-content: space-around;
    *border: 1px solid red;
  }
  .navbar img {
      height: 40px;
      width: 40px;
      border-radius: 100%;
    margin-right: 150px;
    *border: 1px solid red;
  }
  .sidebar-sticky :hover
  {
   color: red;
  }
  .well{
    display: flex;
    background-color: #f8f9fa;
    border: 1px solid black;
    padding-left: 20px;
  }
  .well .img img{
    height: 300px;
    width: 300px;
    margin-top: 100px;
    border-radius: 50%;
  }
.chg-container
{
  display: inline-block;
 text

  }
 </style>
}
</head>
<body style="font-family:Ubuntu">

        <!--top navbar-->

  <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap navbar-expand-lg   bg-dark p-0 shadow flex justify-content-between" >
  	<div class="head" >
  	<img src="img/logo.jpg">
    <a href="" class="navbar-brand  mr-0">Visitor Management System</a>
    </div>
    <div><h4><marque> Welcome <?Php echo $emp_detail['name'];?></h4></div>
  </nav>

  <!--end top navbar-->

  <!--container -->

  <div class="container-fluid hp" style ="background-image:url(https://png.pngtree.com/thumb_back/fh260/background/20190826/pngtree-abstract-metallic-blue-black-frame-layout-modern-tech-design-template-image_305020.jpg)">
    <!--row-->

    <div class="row" >
      <!--side nav bar-->
      <nav class="col-sm-3 bg-light sidebar py-5 " >
        <div class="navbar-light bg-light sidebar-sticky">
          <ul class="nav flex-column">

            <li class="nav-item active"><a href="dashboard.php" class="nav-link">
            	<i class="fas fa-tachometer-alt">Dashboard</i></a></li>

            <li class="nav-item ">
              <a href="Department.php" class="nav-link">
                <i class="fas fa-align-center" >Department</i>
              </a>


            <li class="nav-item">
              <a href="visitor.php" class="nav-link">
                <i class="fas fa-align-center" >Visitor</i>
              </a>
            </li>


            <li class="nav-item">
              <a href="profile.php" class="nav-link">
                <i class="fas fa-align-center" >Profile</i>
              </a>
            </li>

<!-- col-sm-3 bg-light sidebar py-5  -->

            <li class="nav-item dropdown">
              <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">
                <i class="fas fa-align-center" >Report</i>
              </a>
              <div class="dropdown-menu">
                <a href="year.php" class="dropdown-item">Year Wise</a>
                <a href="" class="dropdown-item">Month Wise</a>
                <a href="" class="dropdown-item">Department Wise</a>
              </div>
            </li>



            <li class="nav-item"><a href="chg_pwd.php" class="nav-link"><i class="fas fa-key">Change Password</i></a></li>

            <li class="nav-item"><a href="home.php" class="nav-link"><i class="fas fa-sign-out-alt">Logout</i></a></li>


          </ul>
        </div>
      </nav>
      <!--end side nav bar-->

      <div class="col-sm-9 col-md-9 mt-5 pr-4">
