<?php 
 include('include/dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>user_account</title>
    <?php include('include/csslib.php'); ?>
</head>
    <body>
    <?php include('include/header.php') ?>
    <?php include('include/cart_model.php'); ?>
        <div class="container">
                
                <?php 
                
                $uid = $_SESSION['uid'];
                $result = "SELECT * FROM `users_signup` WHERE `id` = '".$uid."'";
                $qur = mysqli_query($dbcon,$result);
                while($data = mysqli_fetch_assoc($qur)){
                ?>
           
            <div style="font-size: 209%; font-weight: bold;">                 
                <th class = "text-white text-boald">User Detail </th>
            </div>
            <table class="table">
                <thead class="thead-dark bg-dark text-white">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td><input type="text" value="<?php echo $data['u_name']; ?>" ></td>
                    <td> <?php echo $data['u_addr']; ?>; </td>
                    <td><?php echo $data['u_mno']; ?></td>
                    </tr>
                    
                </tbody>
            </table>
                <?php 
                    }
                ?>
    <div style="font-size: 209%; font-weight: bold;">                 
        <th class = "text-white text-boald">Order Detail </th>
    </div>
    <table class="table ">
        <thead>
            <tr class="bg-dark text-white">
                <th>product name</th>
                <th>Quantity</th>
                <th>Total ammount</th>
                <th>date</th>
                <th>status</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
           
                <?php
                $result = "SELECT * FROM `orders` WHERE `user_id` = '".$uid."'";
                $qur = mysqli_query($dbcon,$result);
                while($data = mysqli_fetch_assoc($qur)){
                ?>
            <tr class="spacer"></tr>
            <tr>
                <td>
                    <span class="block-email"><?php echo $data['product_quantity']; ?></span>
                </td>
                <td>
                    <span class="block-email"><?php echo $data['product_quantity']; ?></span>
                </td>
                <td class="desc">$<?php echo $data['final_amount']; ?></td>
                <td class="desc"><?php echo $data['data_time']; ?></td>
                <td><?php echo $data['ccode']; ?></td>
                <td><a  class ="text-dark" href ="view_item.php?id=<?php echo $data['id']; ?>" > View </a></td>
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