<?php 
	require_once('config.php');
	
	?>
<?php
	
	
	
	
	if(isset($_POST)){
		
		$fname = $_POST['fname'];
		$email = $_POST['email'];
		$mobile = $_POST['mobile'];
		$comment =$_POST['comment'];
		
		
		 
		$sql = "INSERT INTO  usersinfo (username, email, mobile, comment) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$fname, $email, $mobile, $comment]);
		if($result){
			echo 'Successfully SENT.';
		}else{
			echo 'There were erros while saving the data.';
		}
	}else{
	echo 'No data';
	
	}
	
	
	
?>

