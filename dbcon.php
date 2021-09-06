<?php
$server = "localhost:3308";
$db_user = "root";
$db_pass = " ";
$db_name = "jait_web";
 $con = mysqli_connect($server, $db_user, $db_pass, $db_name);
 
 if($con){
	?>
	<script>
		alert("Connection Successsful");
	</script>
	<?php
 }else {
	 ?>
	<script>
		alert(" No Connection");
	</script>
	<?php
 }
?>