<?php 
include('../include/dbcon.php');
$id = $_POST['view_id'];
$result = "SELECT * FROM `order_item` WHERE `order_id` = '".$id."'";
$qur = mysqli_query($dbcon,$result);
if($qur){
    $response['message'] = 'item found';
}else {
    $response['error'] = 'item not found';
}
echo json_encode($response);
?>