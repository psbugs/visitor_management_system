<?php include 'uheader.php'; ?>

<div class="chg-container col-sm-9">
<div class="row">
<div class="col-sm-12">
<h1 style="color:white; margin-bottom:50px">Change Password</h1>
</div>
</div>
<div class="row">
<div class="col-sm-6 col-sm-offset-3">
<p class="text-center" style="color:white; text-align: center;">Use the form below to change your password. Your password cannot be the same as your username.</p>
<form method="post" id="passwordForm" style="text-align:center">
<input type="hidden" value="<?= $emp_detail['employee_id'];?>" name="e_id"/>
<input type="password" class="input-lg form-control" width="100%"name="opwd" id="opwd" placeholder="Old Password" autocomplete="off">

<input type="password" class="input-lg form-control" width="100%"name="npwd" id="npwd" placeholder="New Password" autocomplete="off">

 <input type="password" class="input-lg form-control" name="rpwd" id="rpwd" placeholder="Repeat Password" autocomplete="off">
 <input type="submit" id="chgpwdbtn" class="col-xs-12 btn btn-primary btn-load btn-lg" data-loading-text="Changing Password..." value="Change Password">
</form></div>
</div>
</div>

<?php include 'ufooter.php'; ?>
