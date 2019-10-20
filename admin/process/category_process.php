<?php
include('../include/config.php');
if (isset($_POST['submit'])) {
	$name = $_POST['category_name'];
	$status = $_POST['status'];
	$image = $_FILES['category_image']['name'];
	if (move_uploaded_file($_FILES['category_image']['tmp_name'], '../catimg/'.$image)) {
		header('location:product.php?success');
	  } else {
		 echo "Upload failed";
	  }

	$qur = "INSERT INTO `category` SET 
			`category_name` = '$name',
			`status` = '$status',
			`category_image` = '$image'
			";
		$quer = mysqli_query($dbcon,$qur);
		
		if($quer == true)
		{
			header('location:../category.php?success');
		}
}
?>