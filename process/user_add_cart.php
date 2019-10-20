<?php 
include('../include/dbcon.php');
// $id = $_GET['id'];
$id = $_POST['ref_id'];
$item_image = $_POST['item_image'];
$item_name = $_POST['item_name'];
$item_price = $_POST['item_price'];	
$time = $_POST['time'];
$color = $_POST['color'];
$run = 1;
if($time=='sizes') {
	$size = 's';
}
if($time=='sizem') {
	$size = 'm';
}
if($time=='sizel') {
	$size = 'l';
}
if($time=='sizexl') {
	$size = 'x';
}
if($color=='red') {
	$color_id = 'r';
}
if($color=='blue') {
	$color_id = 'b';
}
if($color=='white') {
	$color_id = 'w';
}
if($color=='grey') {
	$color_id = 'g';
}

if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0 ){
	$p_list = $_SESSION['cart'];
	$item_id = $id.'_'.$size.'_'.$color_id;
	foreach($p_list as $key => $value){
		if($time != $p_list[$key]['time'] || $color != $p_list[$key]['color']){
			
		}
		else {
			if($p_list[$key]['id'] == $id) {
				$run = 0;
				$_SESSION['cart'][$key]['qty'] = $_SESSION['cart'][$key]['qty'] + 1;
				
			}
		}
	}
	$response['message'] = 'item Added';
}
if($run){
	$_SESSION['cart'][] = array('id'=>$id, 
								'qty'=>1,
								'item_image'=>$item_image, 
								'item_name'=>$item_name, 
								'item_price'=>$item_price, 
								'time'=>$time, 
								'color'=>$color,
								'size'=>$size,
								'color_id'=>$color_id);
	$response['message'] = 'item Added';
}

echo json_encode($response);

?>

