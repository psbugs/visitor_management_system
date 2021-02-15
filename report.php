 <?php
include 'uheader.php';
?>

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

<script type="text/javascript">
  function exportToExcel(tableID, filename = ''){
    var downloadurl;
    var dataFileType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTMLData = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'export_excel_data.xls';
    
    // Create download link element
    downloadurl = document.createElement("a");
    
    document.body.appendChild(downloadurl);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTMLData], {
            type: dataFileType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadurl.href = 'data:' + dataFileType + ', ' + tableHTMLData;
    
        // Setting the file name
        downloadurl.download = filename;
        
        //triggering the function
        downloadurl.click();
    }
}
  $(document).ready(function(){
        $("#download").click(function(){
         exportToExcel("data_table");



<?php include 'ufooter.php';?>