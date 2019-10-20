<?php 
include('../include/config.php');
if (isset($_POST['submit'])) {
	// $uplodaddir = '/imag/';
	// $uplodadfile = $uplodaddir . basename($_FILES['imageupload']['image']);
	$uploadfile_name = $_FILES['imageupload']['name'];
	
	$other_imageupload = $_FILES['other_imageupload']['name'];
    $name = $_POST['product_name'];
    $category_id = $_POST['time'];
    $product_price = $_POST['product_price'];
    $price = $_POST['product_price'];
    $status = $_POST['status'];
	$date = date('Y/m/d');

	if (move_uploaded_file($_FILES['imageupload']['tmp_name'], '../img/'.$uploadfile_name)) {
		header('location:../product.php?success');
	  } else {
		 echo "Upload failed";
	  }
	 

	$qur = "INSERT INTO `product` SET 
	  `product_image` = '$uploadfile_name',
	  `product_name` = '$name',
	  `category_id` = '$category_id',
	  `product_price` = '$product_price',
	  `status` = '$status'
	  ";
  	$quer = mysqli_query($dbcon,$qur);
	if($quer == true){
			$get = mysqli_fetch_assoc($quer);
			$product_id = mysqli_insert_id($dbcon);
			foreach($other_imageupload as $key=>$value){
				$file_name = $_FILES['other_imageupload']['name'][$key];
				if (move_uploaded_file($_FILES['other_imageupload']['tmp_name'][$key], '../other_image/'.$file_name)) {
					header('location:../product.php?success');
					} else {
					echo "Upload failed";
					}
				
				$qr = "INSERT INTO `product_images` SET 
				`product_other_image` = '$file_name',
				`product_id` = '$product_id'
				";
			$qur = mysqli_query($dbcon,$qr);	
			}
			if($qur == true)
			{
				header('location:../product.php?success');
			}
		}
}
?>