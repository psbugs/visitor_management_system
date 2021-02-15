<?php
include 'uheader.php';
?>
<div class="d-flex justify-content-between mb-4">
	<div ><input type="text" class="form-control" placeholder="Search...." id="search"></div>
	<button class="btn btn-primary" data-toggle="modal" data-target="#add_dept">Add Department</button>
</div>
<?php $departments=$dept->getAllDepartments();
$i=1;?>
<table class="table table-stripped table-info" id="mytable">
	<tr>
		<th>S.No</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
	<?php foreach ($departments as $d){
		?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $d['d_name'];?></td>
  <td>		<button class="btn btn-info btn-sm dept_edit" id="e_<?php echo $d['department_id'];?>" data-toggle="modal" data-target="#edit_dept">Edit</button>

    <?php if($emp_detail['employee_id']==1): ?>
    <button class="btn btn-danger btn-sm dept_delete" id="d_<?php echo $d['department_id'];?>">Delete</button>
    <?php endif;?> </td>
	</tr>
<?php
$i++;
}
?>
</table>
<div class="modal" id="add_dept" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Add Department</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="dept_add_form">
        	<p>Department Name : <input type="text" name="d_name" id="d_name"/>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="add">Add</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<div class="modal" id="edit_dept" >
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit Department</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form id="dept_edit_form">

        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="update_dept" >Update</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<?php include 'ufooter.php';?>
