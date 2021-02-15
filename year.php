<?php include 'uheader.php';?>
        <!--profile area  2nd column-->
        <div class="row text-center mx-6">
          <div class="col">
            Year :
            <select id="year">
              <option>  2019</option>
              <option>  2020</option>
            </select>
          </div>
          <div class="col">
            <button class="btn btn-primary" id="rep_year">show </button>
          </div>
        </div>
        <div class="container">
          <div class="data_table" id="data_table"> 
          <?php 
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
    
  </tr>
<?php 
$i++;
}
?>
</table>

          </div>
        </div>
        <button id="dwl">Print</button>
      <!--profile area 2nd column end-->

<?php include 'ufooter.php';?>
