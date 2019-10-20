<?php 
include('../dbcon.php');
if (isset($_POST['submit'])) {
	// $uplodaddir = '/imag/';
	// $uplodadfile = $uplodaddir . basename($_FILES['imageupload']['image']);
	$uploadfile = $_FILES['imageupload']['name'];
	$name = $_POST['item_name'];
	$desc = $_POST['item_discription'];
	$item_size = $_POST['item_size'];
	$item_color = $_POST['item_color'];
	$price = $_POST['item_price'];
	$date = date('Y/m/d');

	if (move_uploaded_file($_FILES['imageupload']['tmp_name'], '../imag/'.$uploadfile)) {
		  echo "File is valid, and was successfully uploaded.\n";
		  header('location:table.php?success');
		} else {
		   echo "Upload failed";
		}

	$qur = "INSERT INTO `all_cart_item` SET 
			`item_image` = '$uploadfile',
			`item_name` = '$name',
			`item_discription` = '$desc', 
			`item_size` = '$item_size', 
			`item_color` = '$item_color', 
			`add_date` = '$date',
			`item_price` = '$price'
			";
		$quer = mysqli_query($dbcon,$qur);
		
		if($quer == true)
		{
			header('location:../table.php?success');
		}
}
?>