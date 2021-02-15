<?php
session_start(); 
require_once '../model/visitor.php';
$vis=new visitor();
echo $_GET['year'];
$result=$vis->getVisiterByYear($_GET['year']);
?>
<table class="table table-primary">
<?php
foreach ($result as $data) {
	echo "<tr>";
	echo "<td>".$data['name']."</td>";
	echo "<td>".$data['reason']."</td>";
	echo "</tr>";			
}
?>
</table>
