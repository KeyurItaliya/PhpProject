<?php
include('../include/dbcon.php');
$uname = $_POST['user_name'];
$upass = $_POST['user_password'];

// if($_POST['user_name']==''&&$_POST['user_password']==''){
// 	$mess['success']= false;
// 	$mess['message']="Please fill all the details";
// 	echo json_encode($mess);
// 	exit;

$qur = "SELECT * FROM `users_signup` WHERE `user_name` = '$uname' AND `user_password` = '$upass'";

$run = mysqli_query($dbcon,$qur);

$result = mysqli_num_rows($run);
if($result == 1){
	$data = mysqli_fetch_assoc($run);
    $id = $data['id'];
    // session_start();
   $_SESSION['uid'] = $id;
   $response['message'] = 'You are logIn';
}
else{
	header('location:../index.php');
	$response['message'] = 'Not logIn';
}

echo json_encode($response);	
// echo json_encode($mess);
?>