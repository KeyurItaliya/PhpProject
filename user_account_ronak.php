<?php 
 include('include/dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>user_account</title>
    <style>
        body{
            background-color:black;
        }
    </style>
    <?php include('include/csslib.php'); ?>
</head>
    <body>
    <?php include('include/header.php'); ?>
    <div class="container"> 
   
        <div class="card mt-3">
            <div class="row justify-content-center mt-3 mb-3">
            <div class="col-md-4">
        <div class="card-body">
            <h2 class="card-title"><b>user info</b></h2>
            <p class="card-text">my name is akshay</p>
           <p><small>& I AM ABSULATLY DESIGN ADDICTED</small></p>
           <button class="btn btn-primary mt-3" type="submit">view portfolio</button>
        </div>
    </div>
    <div class="col-md-4">
        <img src="images/blog-02.jpg" class="card-img rounded-circle" alt="..." style="width:150px;height:170px;">
    </div>
</div>
</div>  
</div>
   <div class="container mt-2">         
        <div class="card">
    <div style="font-size: 209%; font-weight: bold;">                 
        <th class = "text-white text-boald">Order  </th>
    </div>
    <table class="table ">
        <thead>
            <tr class="bg-dark text-white">
                <th>Image</th>
                <th>Product_name</th>
                <th>Total amount</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tr>
            <td> <img src="images/product/apple_b1_1.jpeg" class="card-img rounded-circle" style="width:50px;height:50px;"></td>
            <td>Apple watch</td>
            <td>20,000</td>
            <td>04/07/2019</td>
            <td><span class="badge badge-warning">Pandding</span></td>
            <td><button class="btn btn-default">Details</button></td>
        </tr>
        <tr>
             <td><img src="images/product/apple_w1_2.jpeg" class="card-img rounded-circle" style="width:50px;height:50px;"></td>
            <td>Apple watch</td>
            <td>20,000</td>
            <td>04/07/2019</td>
            <td><span class="badge badge-success">Success</span></td>
            <td><button class="btn btn-default">Details</button></td>
        </tr>
        <tr>
            <td> <img src="images/product/apple_w1_2.jpeg" class="card-img rounded-circle" style="width:50px;height:50px;"></td>
            <td>Apple watch</td>
            <td>20,000</td>
            <td>04/07/2019</td>
            <td><span class="badge badge-danger">Failed</span></td>
            <td><button class="btn btn-default">Details</button></td>
        </tr>
        <tr>
            <td> <img src="images/product/apple_w1_2.jpeg" class="card-img rounded-circle" style="width:50px;height:50px;"></td>
            <td>Apple watch</td>
            <td>20,000</td>
            <td>04/07/2019</td>
            <td><span class="badge badge-warning">Pandding</span></td>
            <td><button class="btn btn-default">Details</button></td>
        </tr>
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
            </div>
            </div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>