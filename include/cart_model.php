	<!-- Cart cart_model.php-->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
		
			<div id="popover_cantent-wrape" class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<div class="header-cart-item-txt p-t-8">
						<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
							<?php
							if(isset($_SESSION['cart'])) {
							$v = $_SESSION['cart'];
							// $items_in_cart = count($_SESSION['cart']);
							// print_r($items_in_cart);
							foreach($v as $key => $value){	
							?>
								<li class="header-cart-item flex-w flex-t m-b-12">
									<div class="header-cart-item-img">
										<?php print_r($v[$key]['item_image']); ?>
									</div>
									<div class="header-cart-item-txt p-t-8">
										<span class="header-cart-item-info">
											<div id="qty">
												name
												<?php print_r($v[$key]['item_name']); ?>
											</div>
										</span>

										<span class="header-cart-item-info">
										Quantity :
											<?php echo $v[$key]['qty']; ?>
										</span>
									
										<span class="header-cart-item-info">
										Size :
											<?php echo $v[$key]['time']; ?>
										</span>

										<span class="header-cart-item-info">
										Size :
											<?php echo $v[$key]['color']; ?>
										</span>
									</div>
								</li>
							<?php 
							}
							} else {
								echo 'empty cart';
							}
						
						 ?>
						</a>
					</div>
				</ul>
				
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: $75.00
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>