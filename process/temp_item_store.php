<?php 
include('../include/dbcon.php');
$valu = $_SESSION['cart'];
    $cname = $_POST['#quent'];
    $state = $_POST['id'];
    $ccode = $_POST['ccode'];
    $vg = $_POST['vg'];
    $user_id = $_SESSION['uid'];
    foreach($valu as $key => $val){
    $product_id = $valu[$key]['id'];
    }
    $product_quantity = $_POST['qty'];
    $data_time = date("Y-m-d H:i:s");
  $qur ="INSERT INTO `orders` SET 
    `product_id` = '$product_id',
    `user_id` = '$user_id',
    `product_quantity` = '$product_quantity',
    `cname` = '$cname',
    `state` = '$state', 
    `ccode` = '$ccode',
    `vg` = '$vg',
    `data_time` = '$data_time'
     ";

$run = mysqli_query($dbcon, $qur);
    if($run){
        $response['message'] = 'item checkout';
    }else {
        $response['message'] = 'item not checkout';
    }
echo json_encode($response);
?>