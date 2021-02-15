<?php
include 'uheader.php';
?>
<div class="d-flex justify-content-between mb-4">
	<div ><input type="text" class="form-control" placeholder="Search...."></div>
		<button class="btn btn-primary" data-toggle="modal" data-target="#add_vstr">Add Visitor</button>
</div>
<?php 
if($emp_detail['employee_id']==1)
$visitors=$vis->getAllvisitors();
else
$visitors=$vis->getAllVisitorsByEid($emp_detail['employee_id']);
$i=1;?>
<table class="table table-stripped table-info">
	<tr>
		<th>S.no</th>
		<th>Name</th>
		<th>In Time</th>
		<th>Out Time</th>
		<th>Reason</th>
		<th>Action</th>
	</tr>
	<?php foreach ($visitors as $v){
		?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $v['name'];?></td>
		<td><?php echo $v['intime'];?></td>
		<td><?php echo $v['outtime'];?></td>
		<td><?php echo $v['reason'];?></td>
		<td>   <button class="btn btn-info btn-sm vis_edit" id="v_<?php echo $v['visitor_id'];?>" data-toggle="modal" data-target="#edit_vis">Edit</button>
    
    <?php  ?>
    <button class="btn btn-danger btn-sm vis_delete" id="v_<?php echo $v['visitor_id'];?>">Delete</button>
    <?php ?> </td>
	</tr>
<?php 
$i++;
}
?>
</table>
<div class="modal" id="add_vstr" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Visitor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="visitor_add_form">
        	<p>Name : <input type="text" name="name" id="name"/>
        	<p>Email : <input type="text" name="email" id="email"/>
        	<p>Mobile no: <input type="text" name="mobile_no" id="mobile_no"/>
        	<p>Reason : <input type="text" name="reason" id="reason"/>
        	<p>Intime : <input type="text" name="intime" id="intime"/>	
        	<p>Outtime : <input type="text" name="outtime" id="outtime"/>	
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="add_vstr_btn">Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<div class="modal" id="edit_vis" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit visitor</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="vis_edit_form">
            
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="update_vis" >Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php include 'ufooter.php';?>