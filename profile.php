<?php include 'uheader.php';?>
<!--profile area  2nd-->
<ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
    </ul>
<div class="well">

        <div class="img"><img src="api/<?php echo $emp_detail['profile_pic'];?>"></div>

    <div id="myTabContent" class="tab-content">


      <div class="tab-pane active in col-sm-3" id="home">

        <form id="tab">
            <label><h6>Username</h6></label>
            <input type="text" value="<?= $emp_detail['name'];?>" class="input-xlarge">
            <label><h6>First Name</h6></label>
            <input type="text" value="<?= $emp_detail['name'];?>" class="input-xlarge">
            <label><h6>Contact No</h6></label>
            <input type="text" value="<?= $emp_detail['contact_no'];?>" class="input-xlarge">
            <label><h6>Email</h6></label>
            <input type="text" value="<?= $emp_detail['email_id'];?>" class="input-xlarge">
            <label><h6>Designation</h6></label>
            <textarea value="parmar" rows="3" class="input-xlarge"><?= $emp_detail['designation'];?>
            </textarea>

        	    <button class="btn btn-primary" style="margin-bottom:20px">Update</button>
                <button class="btn btn-primary" data-toggle="modal" data-target="#img_model" id="add_img">Add/update Image</button>
        	</div>
        </form>
      </div>
      <!--profile area  2nd end-->
<div class="modal" id="img_model" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Profile Pic</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="img_add_form" method="post" enctype="multipart/form-data">
            <input type="text" name="e_id" value="<?php echo $emp_detail['employee_id'];?>">
            <p>Choose Pic : <input type="file" name="profile_pic" id="profile_pic"/>   </p>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="add_pic_btn">Upload</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php require_once 'ufooter.php';?>
