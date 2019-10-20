<?php 
include('include/dbcon.php');
	if (isset($_SESSION['uid'])) {
		$uid = $_SESSION['uid']; 
	}
 	
//  	// $uid = session_id();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Product</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<?php
		include('include/csslib.php');
	?>
<!--===============================================================================================-->
</head>
<body>

	<!-- Header -->
	
			<?php
				include('include/header.php');
				include('include/cart_model.php');
			?>
<div class="container">
	<!-- Product -->
	<div class="bg0 m-t-23 p-b-140">
         <?php 
            $uid = $_SESSION['uid'];
            $result = "SELECT * FROM `users_signup` WHERE `id` = '".$uid."'";
            $qur = mysqli_query($dbcon,$result);
            while($data = mysqli_fetch_assoc($qur)){
            ?>
        <div class="card mt-3">
            <div class="row justify-content-center mt-3 mb-3">
                <div class="col-md-4">
                     <div class="card-body">
                        <h3 class="card-title"><b>User Info</b></h3>
                        <p class="card-text"><?php echo $data['user_name']; ?></p>
                        <div class="text-left mt-3">
                            <button type="button" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalContactForm">
                            view profile</button>
                        </div>
            
                    </div>
                </div>
                <?php 
                        }
                ?>
                <div class="col-md-4">
                    <img src="images/blog-02.jpg" class="card-img rounded-circle" alt="..." style="width:150px;height:170px;">
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

<!-- view profilemodel -->
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Write to us</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form ">
                        <label data-error="wrong" data-success="right" for="form34"> name</label>
                        <input type="text" id="form34" class="form-control validate">
                    </div>

                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="form29">email</label>
                        <input type="email" id="form29" class="form-control validate">
                    </div>

                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="form32">phone no</label>
                        <input type="text" id="form32" class="form-control validate">
                    </div>

                    <div class="md-form">
                    <label data-error="wrong" data-success="right" for="form8">Address</label>
                    <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- <script src="js/main.js"></script> -->
    <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
    <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>