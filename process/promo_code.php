<?php 
include('../include/dbcon.php');
$discount = $_POST['discount'];
$qur = "SELECT * FROM `promo` WHERE `promo_code` = '$discount'";
$run = mysqli_query($dbcon,$qur);
$done = mysqli_num_rows($run);
if($run == true){
    $data = mysqli_fetch_assoc($run);
    $response['promo_price'] = $data['discount_amount'];
    $response['promo_type'] = $data['discount_type'];
    $response['success'] = true;
    $response['message'] = 'aplay success';
}else{
    $response['success'] = false;
    $response['message'] = 'invalid promo';
}

echo json_encode($response);
?>