<?php 
$cartval = $_SESSION['cart'];
foreach ($cartval as $key => $val){
    $iid = $val['id'];
    $size = $val['size'];
    $color = $val['color_id'];
    $all = $val['id'] .'_'.$val['size'] .'_'.$val['color_id'];
$qur ="INSERT INTO `orders` SET 
    `order_id` = '$all',
    `product` = '$state'
     ";
?>