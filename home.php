<?php include 'header.php';?>

<div class="container">
  <div class="errmsg">

</div>
    <div class="jumbotron" style="background-image: url(https://www.transparenttextures.com/patterns/always-grey.png);">
    <h1 class="text-center ">Visitor Management System</h1>

  </div>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-justified" role="tablist">
    <li class="nav-item">
      <a class="nav-link active"id="login1" data-toggle="tab" href="#login">Login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link " id="signup1"data-toggle="tab" href="#signup">Sign Up</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="login" class="container tab-pane active"><br>
     <form id="loginform">

  <h1 class="text-center">Login Form</h3>
    <div class="row">
      <div class="col-lg-6">
    <div class="form-group">
      <label for="inputemail"style="font-weight:900">Email Address</label>
      <input type="email" class="form-control" id="email_id" placeholder="Enter Email" name="email_id" autocomplete="off">
    </div>
  </div>
  <div class="col-lg-6">
    <div class="form-group">
      <label for="inputpassword" style="font-weight:900">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter Password" name="password">
    </div>
  </div>
</div>
<p class="text-center">
    <button type="button" id="loginbtn"name="subm"  class="btn btn-outline-secondary">Login</button>
    <a href="#signup" id="inputreg" name="reg" class="btn btn-outline-secondary" data-toggle="tab">Register</a></p>
  </form>
    </div>
    <div id="signup" class="container tab-pane fade"><br>

  <h1 class="text-center">Registration Form</h3>
        <form id="registerationform">

    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Employee name</label>
      </div>
      <div class="col-lg-9">
        <input type="text" name="name"id="name" class="form-control"autocomplete="off" placeholder="Name">
      </div>
    </div>
    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Employee Email</label>
      </div>
      <div class="col-lg-9">
        <input type="email" name="email_id" id="email_id" class="form-control"id="inputmail"autocomplete="off" placeholder="Email">
      </div>
    </div>
    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Employee Mobile No.</label>
      </div>
      <div class="col-lg-9">
        <input type="text" name="contact_no" id="contact_no" class="form-control"id="mob_no" placeholder="Mobile Number">
      </div>
    </div>

    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Department</label>
      </div>
      <div class="col-lg-9">
        <select class="form-control" id="department_id" name="department_id">
          <option>Select Department</option>
          <?php $departments=$dept->getAllDepartments();
          foreach ($departments as $dept) {
            echo '<option value="'.$dept['department_id'].'">'.$dept['d_name']."</option>";
          }
          ?>

        </select>
      </div>
    </div>

    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Designation</label>
      </div>
      <div class="col-lg-9">
        <input type="text-area" name="designation" id="designation" class="form-control" placeholder="Designation">
      </div>
    </div>

    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Password</label>
      </div>
      <div class="col-lg-9">
        <input type="password" name="password" id="password1" class="form-control" placeholder="Password">
      </div>
    </div>

    <div class="form-row m-4">
      <div class="col-lg-2">
        <label style="font-weight:900">Re type Password</label>
      </div>
      <div class="col-lg-9">
        <input type="password" name="re_type_password" id="re_type_password" class="form-control" placeholder="Again Password">
      </div>
    </div>
    <div class="form-row">
      <button type="button" class="btn btn-outline-success m-4" id="register">Register</button>
      <button class="btn btn-outline-secondary m-4">Close</button>
    </div>
  </form>

    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
</div>
<?php require_once 'footer.php';?>
