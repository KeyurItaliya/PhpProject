<?php
include('../include/dbcon.php');
	
	$u_name = $_POST['u_name'];
	$u_addr = $_POST['u_addr'];
	$u_mno = $_POST['u_mno'];
	$u_pass = $_POST['u_pass'];
	
	$insVenue = "INSERT INTO `users_signup` SET 
	
	`u_name` = '$u_name', 
	`u_addr` = '$u_addr',
	`u_mno` = '$u_mno',
	`u_pass` = '$u_pass'
	 ";


	if(mysqli_query($dbcon, $insVenue)){
		
		$_SESSION['cozestore_uid'] = $uid;
		$mess['success'] = true;
		$mess['message']= 'Registration sucess';
	

	}else{
		$mess['success'] = false;
		$mess['message']= 'registration failed.';
	}

echo json_encode($mess);

?>