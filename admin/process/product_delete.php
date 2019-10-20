<?php 
include('../include/config.php');
$itemid = $_GET['id'];
$ima_get = "SELECT * FROM `product` WHERE `id`='".$itemid."'"; 
$run = mysqli_query($dbcon, $ima_get);
if($run==true){
	$value = mysqli_fetch_assoc($run);
	$path = '../img/'.$value['product_image'];
}

chown($path, 666);

if (unlink($path)) {
	$qur = "DELETE FROM `product` WHERE `id`='".$itemid."'";
	$run = mysqli_query($dbcon,$qur);
	if ($run == true) {
		header('location:../product.php?message=sucess');
	}
} else {
	echo 'fail';
	exit;
}

?>