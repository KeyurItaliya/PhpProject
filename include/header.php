
<header class="header-v4">
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
				<div class="top-bar">
					<div class="content-topbar flex-sb-m h-full container">
						<div class="left-top-bar">
							xyz@gmail.com
						</div>
						<div class="right-top-bar flex-w h-full">
							<a href="#" class="flex-c-m trans-04 p-lr-25">
								Help & FAQs
							</a>

							<!-- <button><a data-toggle="modal" data-target="#myModal" class="text-warning flex-c-m trans-04 p-lr-25">
								Sign In
							</a></button> -->
							<?php
								if(isset($_SESSION['uid']) && $_SESSION['uid'] != ''){
							?>
							<button><a href ="myaccount.php" class="flex-c-m trans-04 p-lr-25 text-white">
									MyAcount
								</a></button>
							
								<a href="logout.php" class="flex-c-m trans-04 p-lr-25 text-white">
									Sign Out
								</a>
							<?php
								} else{
							?>
							<button><a data-toggle="modal" data-target="#myModal" class="flex-c-m trans-04 p-lr-25 text-white">
								Sign In
							</a></button>
						
							<button><a data-toggle="modal" data-target="#mysignupModal" class="flex-c-m trans-04 p-lr-25 text-white">
								Sign Up
							</a></button>
							<?php 
								}
							?>
						</div>
					</div>
				</div>
			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">
					<a href="#" class="logo">
						<img src="images/icons/logo-01.png" alt="IMG-LOGO">
					</a>
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Shop</a>
							</li>
							<li>
								<a href="blog.php">Blog</a>
							</li>

							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
						</ul>
					</div>	

					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header text-center">
								<h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body mx-3">
								<div class="md-form mb-5 text-dark">
									<label data-error="wrong" data-success="right" for="defaultForm-email">Your User Name</label>
									<input type="email" id="user_name" class="form-control validate">		
								</div>
								<div class="md-form mb-4 text-dark">
									<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
									<input type="password" id="user_password" class="form-control validate">				
								</div>
							</div>
							<div class="modal-footer d-flex justify-content-center">
								<button class="btn btn-primary getuserLogin"><span>Login</button>
							</div>
						</div>
					</div>
				</div>
				
					<!-- user sign up -->
					<div class="modal fade" id="mysignupModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header text-center">
									<h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body mx-3">
									<div class="md-form mb-5 text-dark">
										<label data-error="wrong" data-success="right" for="defaultForm-email">Your User Name</label>
										<input type="email" class="form-control validate">		
									</div>
									<div class="md-form mb-5 text-dark">
										<label data-error="wrong" data-success="right" for="defaultForm-email">Your Address</label>
										<input type="email" class="form-control validate">		
									</div>
									<div class="md-form mb-5 text-dark">
										<label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
										<input type="email" class="form-control validate">		
									</div>
									<div class="md-form mb-5 text-dark">
										<label data-error="wrong" data-success="right" for="defaultForm-email">Your Number</label>
										<input type="email" class="form-control validate">		
									</div>
									<div class="md-form mb-4 text-dark">
										<label data-error="wrong" data-success="right" for="defaultForm-pass">Your password</label>
										<input type="password" class="form-control validate">				
									</div>
								</div>
								<div class="modal-footer d-flex justify-content-center">
									<button class="btn btn-primary"><span>Signup</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div id="cart-popover" class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php 
							if(isset($_SESSION['cart'])) {
								echo count($_SESSION['cart']);
							} else {
								echo '';
							}
							?>">
							<i id="navbar-cart" class="item_add zmdi zmdi-shopping-cart"></i>
						</div>

						<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti" data-notify="0">
							<i class="zmdi zmdi-favorite-outline"></i>
						</a>
					</div>
						</div>
				</nav>
			</div>	
		</div>

	<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->		
			<div class="logo-mobile">
				<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart" data-notify="2">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>

				<a href="#" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti" data-notify="0">
					<i class="zmdi zmdi-favorite-outline"></i>
				</a>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over $100
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04">
							Help & FAQs
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							My Account
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							EN
						</a>

						<a href="#" class="flex-c-m p-lr-10 trans-04">
							USD
						</a>
					</div>
				</li>
			</ul>


			

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
					<span class="arrow-main-menu-m">
						<i class="fa fa-angle-right" aria-hidden="true"></i>
					</span>
				</li>

				<li>
					<a href="product.php">Shop</a>
				</li>

				<li>
					<a href="shoping-cart.php" class="label1 rs1" data-label1="hot">Features</a>
				</li>

				<li>
					<a href="blog.php">Blog</a>
				</li>

				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
		</div>

		<!-- Modal Search -->
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="search" placeholder="Search...">
				</form>
			</div>
		</div>
	</header>       