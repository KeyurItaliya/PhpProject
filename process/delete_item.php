<?php 
    include('../include/dbcon.php');
    $id = $_POST['delete_id'];
    $cartval = $_SESSION['cart'];
foreach ($cartval as $key => $val){
    $iid = $val['id'];
    $size = $val['size'];
    $color = $val['color_id'];
    $all = $val['id'] .'_'.$val['size'] .'_'.$val['color_id'];
if($id == $all){
    unset($_SESSION['cart'][$key]);
    $response['message'] = 'item delete';
}
}
echo json_encode($response);
?>