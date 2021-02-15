	<?php 
	include_once '../model/Employee.php';
	session_start(); 

	$emp=new Employee();


$email=$_SESSION['uname'];
$emp_detail=$emp->getEmployeeByEmail($email);
require_once '../model/Department.php';

$dept=new Department();
	$departments=$dept->getFilteredDept($_GET);
	$i=1;
	?>

	<tr>
		<th>S.no</th>
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
if($i==1)
echo '<tr><td colspan="3">No Records Found</td></tr>';
?>