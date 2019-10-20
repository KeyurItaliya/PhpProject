<?php 
include('../include/dbcon.php');
    $cname = $_POST['cname'];
    $state = $_POST['state'];
    $ccode = $_POST['ccode'];
    // $item_price = $_POST['item_price'];
    $final_amount = $_POST['final_amount'];
    $user_id = $_SESSION['uid'];
    $all_item = count($_SESSION['cart']);
    $product_quantity = $_POST['product_quantity'];
    $data_time = date("Y-m-d H:i:s");
    $valu = $_SESSION['cart'];
             $qur = "INSERT INTO `orders` SET 
            `user_id` = '$user_id',
            `product_quantity` = '$product_quantity',
            `cname` = '$cname',
            `state` = '$state', 
            `ccode` = '$ccode',
            `final_amount` = '$final_amount',
            `data_time` = '$data_time'
            ";
            
            $run = mysqli_query($dbcon, $qur);
            
        
       $runn = "SELECT * FROM `orders` ORDER BY id DESC LIMIT 1";
        $run_select = mysqli_query($dbcon, $runn);   
        
            if($data = mysqli_fetch_assoc($run_select)){
                $values = $data['id'];
            }
            foreach($valu as $key => $val){
                $idd = $valu[$key]['id'];
                $imgs = $valu[$key]['item_image'];
                $item_price = $valu[$key]['item_price'];
                $quer = "INSERT INTO `order_item` SET 
                `order_id` = '$values',
                `product_id` = '$idd',
                `imgs`= '$imgs',
                `date` = '$data_time',
                `price` = '$item_price',
                `product_quantity` = '$product_quantity'
                ";
             $runn = mysqli_query($dbcon, $quer);
             }
    if($run){
        $response['message'] = 'item checkout';
    }else {
        $response['error'] = 'item not checkout';
    }
echo json_encode($response);
?>