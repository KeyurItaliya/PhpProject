<?php 
include('../dbcon.php');
$itemid = $_GET['id'];
$qur = "DELETE FROM `all_cart_item` WHERE `ref_id`='".$itemid."'";

$run = mysqli_query($dbcon,$qur);
if ($run == true) {
	header('location:../table.php?message=sucess');
}
?>