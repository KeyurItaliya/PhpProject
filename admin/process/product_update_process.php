<?php
 include('../include/config.php');
 if(isset($_POST['submit'])){
$product_image = $_FILES["update_img_value"]["name"];
$product_name = $_POST['product_name'];
$product_price = $_POST['product_price'];
$status = $_POST['status']; 

if (move_uploaded_file($_FILES['update_img_value']['tmp_name'], '../img/'.$product_image)) {
    header('location:product.php?success');
  } else {
     echo "Upload failed";
  }

     $sql = "UPDATE `product` SET 
    `product_image`= '$product_image',
    `product_name`= '$product_name',
    `product_price`= '$product_price',
    `status`= '$status' WHERE 1";
    $run = mysqli_query($dbcon,$sql);
    if($run == true){
        header('location:../product.php?sucess');
    }
 }
?>