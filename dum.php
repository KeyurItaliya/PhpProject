239 - icon -> 370 - cart show click on cart-item-icon

index.php -> BuY (881)

data-id="<?php echo $data['ref_id'];?>"
401  id="cart_ditails"

384 id="popover_cantent-wrape"
240 id="cart-popover"

239 id="navbar-cart"



index.php 
382

<?php 
			$cartid = $_SESSION['cart'];
			$qry = "SELECT * FROM `all_cart_item` WHERE `ref_id` ='$cartid'";
						
			$run = mysqli_query($dbcon,$quy);

			if($data = mysqli_fetch_assoc($run)){

			foreach($_SESSION['cart'] as $key => $i):
				$_SESSION['cart'][$i] = $_POST['ref_id'][$key];
				print_r($_SESSION['cart']);
			endforeach;

		}


		<span>
											<?php if(empty($_SESSION['cart'])){
												?>
												<h1><?php echo "empthy cart"; ?><h1>
												<?php
									 } ?> 
										</span>