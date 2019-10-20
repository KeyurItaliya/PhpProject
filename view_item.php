<?php 
 include('include/dbcon.php');
 $id = $_REQUEST['id']; 
?>
<!DOCTYPE html>
<html>
<head>
	<title>user_account</title>
    <?php include('include/csslib.php'); ?>
</head>
    <body>
    <?php include('include/header.php') ?>

 <div class="container">     
                    
  <th class = "text-white">Order Detail </th>
    <table class="table ">
        <thead>
            <tr class="bg-dark text-white">
                <th>product name</th>
                <th>Quantity</th>
                <th>price</th>
                <th>date</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
           
           <?php 
                $result = "SELECT * FROM `order_item` WHERE `order_id` = '".$id."'";
             $qur = mysqli_query($dbcon,$result);
                while($data = mysqli_fetch_assoc($qur)){
           ?>
              
            <tr class="spacer"></tr>
            <tr>
                <td>
                    <span class="block-email"><?php echo $data['product_id']; ?></span>
                </td>
                <td>
                    <span class="block-email"><?php echo $data['product_quantity']; ?></span>
                </td>
                <td>
                    <span class="block-email"><?php echo $data['price']; ?></span>
                </td>
                <td>
                    <span class="block-email"><?php echo $data['date']; ?></span>
                </td>
                <td>
                    <span class="block-email"><?php echo $data['status']; ?></span>
                </td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>
    </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>