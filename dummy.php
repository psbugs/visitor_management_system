<?php include 'header.php';?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="alert alertcover">
		<p class="alerttext"></p>
	</div>
	<button id="b1">b1</button>


	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#b1").click(function(){
				mymsg("hello","fksdj");
				//showMsg("dfjsl");
			});

		});
	</script>
</body>
</html>