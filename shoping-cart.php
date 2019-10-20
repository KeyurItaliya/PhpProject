<?php 
 include('include/dbcon.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Shoping Cart</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.png" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>

<body class="animsition">

    <!-- Header -->
    <?php include('include/header.php'); ?>
    <?php include('include/cart_model.php'); ?>

    <!-- breadcrumb -->
    <div class="container">
        <div class="bread-crumb flex-w p-l-25 p-r-15 p-t-30 p-lr-0-lg">
            <a href="index.php" class="stext-109 cl8 hov-cl1 trans-04">
                Home
                <i class="fa fa-angle-right m-l-9 m-r-10" aria-hidden="true"></i>
            </a>

            <span class="stext-109 cl4">
                Shoping Cart
            </span>
        </div>
    </div>


    <!-- Shoping Cart -->
    <form class="bg0 p-t-75 p-b-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
                    <div class="m-l-25 m-r--38 m-lr-0-xl">
                        <div class="wrap-table-shopping-cart">
                            <table id="multi" class="table-shopping-cart">
                                <tr class="table_head">
                                    <th class="column-1">Product</th>
                                    <th class="column-2">Name</th>
                                    <th class="column-3">Price</th>
                                    <th class="column-4">Quantity</th>
                                    <th class="column-5">Total</th>
                                    <th class="column-6">Delete</th>
                                </tr>
                                <?php 
								if(isset($_SESSION['cart'])) {
								$data = $_SESSION['cart'];
                                foreach($data as $key => $value){		
								?>
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="how-itemcart1">
                                            <?php echo $data[$key]['item_image']; ?>
                                        </div>
                                    </td>
                                    <td class="column-2"><a href= "#"><?php echo $data[$key]['item_name']; ?></td></a>
                                    <td id="price_<?php echo $data[$key]['id'].'_'.$data[$key]['size'].'_'.$data[$key]['color_id']; ?>"
                                        class="column-3 price_item"><?php echo $data[$key]['item_price']; ?></td>
                                    <td class="column-4">
                                        <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                            <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m"
                                                data-id="<?php echo $data[$key]['id'].'_'.$data[$key]['size'].'_'.$data[$key]['color_id']; ?>">
                                                <i class="fs-16 zmdi zmdi-minus"></i>
                                            </div>
                                            <input class="mtext-104 cl3 txt-center num-product all-quantity"
                                                type="number" data-product="<?php echo $data[$key]['qty']; ?>" name="num-product1"
                                                data-id = "qunt_<?php echo $data[$key]['id']; ?>"
                                                value="<?php echo $data[$key]['qty']; ?>">
                                            <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m"
                                                data-id="<?php echo $data[$key]['id'].'_'.$data[$key]['size'].'_'.$data[$key]['color_id']; ?>">
                                                <i class="fs-16 zmdi zmdi-plus">
                                                </i>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="column-5">$<span class="total_price"
                                            data-id="<?php echo $data[$key]['id'].'_'.$data[$key]['size'].'_'.$data[$key]['color_id']; ?>"
                                            id="result_<?php echo $data[$key]['id'].'_'.$data[$key]['size'].'_'.$data[$key]['color_id']; ?>"><?php echo $data[$key]['item_price']; ?></span>
                                    </td>
                                    <td class="column-6"><button><a class="item_delete item-cart-id"
                                                data-id="<?php echo $data[$key]['id'].'_'.$data[$key]['size'].'_'.$data[$key]['color_id']; ?>"><i
                                                    class="zmdi zmdi-delete"></i></a></button></td>
                                </tr>
                                <?php
								}
							}
								?>
                            </table>
                        </div>
                        <?php 
					
					if(!empty($_SESSION['cart'])){
				?>
                        <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
                            <div class="flex-w flex-m m-r-20 m-tb-5">
                                <input id="code" class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5"
                                    type="text" name="coupon" placeholder="Coupon Code ">

                                <div
                                    class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
                                    <button type="button" id="coupon" onclick="datatake();"> Apply coupon</button>
                                </div>
                            </div>
                        </div>
                        <?php
					} else {
						echo '<span class="text-success" style="">cart is empty <span>';
					}
				?>
                    </div>
                </div>

                <div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
                    <div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
                        <h4 class="mtext-109 cl2 p-b-30">
                            Cart Totals
                        </h4>

                        <div class="flex-w flex-t bor12 p-b-13">
                            <div class="size-208">
                                <span class="stext-110 cl2">
                                    Subtotal:
                                </span>
                            </div>

                            <div class="size-209">
                                $<span class="mtext-110 cl2" id="total_amount">
                                </span>
                            </div>
                        </div>

                        <div class="flex-w flex-t bor12 p-t-15 p-b-30">
                            <div class="size-208 w-full-ssm">
                                <span class="stext-110 cl2">
                                    Shipping:
                                </span>
                            </div>

                            <div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
                                <p class="stext-111 cl6 p-t-2">
                                    There are no shipping methods available. Please double check your address, or
                                    contact us if you need any help.
                                </p>

                                <div class="p-t-15">
                                    <span class="stext-112 cl8">
                                        Calculate Shipping
                                    </span>

                                    <div class="rs1-select2 rs2-select2 bor8 bg0 m-b-12 m-t-9">
                                        <select class="js-select2 cname" name="cname">
                                            <option value="In">IN</option>
                                            <option value="usa">USA</option>
                                            <option value="uk">UK</option>
                                        </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>

                                    <div class="bor8 bg0 m-b-12">
                                        <input class="state stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                            name="state" placeholder="State /  country">
                                    </div>

                                    <div class="bor8 bg0 m-b-22">
                                        <input class="ccode stext-111 cl8 plh3 size-111 p-lr-15" type="text"
                                            name="postcode" placeholder="Postcode / Zip">
                                    </div>

                                    <!-- <div class="flex-w">
										<div class="flex-c-m stext-101 cl2 size-115 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer">
											Update Totals
										</div>
									</div> -->

                                </div>
                            </div>
                        </div>

                        <div class="flex-w flex-t p-t-27 p-b-33 show_data">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    discount:
                                </span>
                            </div>

                            <div class="size-209 p-t-1 text-success">
                                $<span class="mtext-110 cl2 text-success" id="final_discount_amount">0</span>
                            </div>
                        </div>
                        <div class="flex-w flex-t p-t-27 p-b-33">
                            <div class="size-208">
                                <span class="mtext-101 cl2">
                                    Total:
                                </span>
                            </div>

                            <div class="size-209 p-t-1">
                                $<span class="mtext-110 cl2 final_amount" id="final_checkout_amount"></span>
                            </div>
                        </div>

                        <button type="button"
                            class="checkout flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
                            Proceed to Checkout
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <!-- Footer -->
    <footer class="bg3 p-t-75 p-b-32">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Categories
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Women
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Men
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shoes
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Watches
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Help
                    </h4>

                    <ul>
                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Track Order
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Returns
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                Shipping
                            </a>
                        </li>

                        <li class="p-b-10">
                            <a href="#" class="stext-107 cl7 hov-cl1 trans-04">
                                FAQs
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        GET IN TOUCH
                    </h4>

                    <p class="stext-107 cl7 size-201">
                        Any questions? Let us know in store at 8th floor, 379 Hudson St, New York, NY 10018 or call us
                        on (+1) 96 716 6879
                    </p>

                    <div class="p-t-27">
                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-instagram"></i>
                        </a>

                        <a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
                            <i class="fa fa-pinterest-p"></i>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3 p-b-50">
                    <h4 class="stext-301 cl0 p-b-30">
                        Newsletter
                    </h4>

                    <form>
                        <div class="wrap-input1 w-full p-b-4">
                            <input class="input1 bg-none plh1 stext-107 cl7" type="text" name="email"
                                placeholder="email@example.com">
                            <div class="focus-input1 trans-04"></div>
                        </div>

                        <div class="p-t-18">
                            <button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04">
                                Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-t-40">
                <div class="flex-c-m flex-w p-b-18">
                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                    </a>

                    <a href="#" class="m-all-1">
                        <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                    </a>
                </div>

                <p class="stext-107 cl6 txt-center">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>
            </div>
        </div>
    </footer>


    <!-- Back to top -->
    <div class="btn-back-to-top" id="myBtn">
        <span class="symbol-btn-back-to-top">
            <i class="zmdi zmdi-chevron-up"></i>
        </span>
    </div>

    <!--===============================================================================================-->
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
    $(".js-select2").each(function() {
        $(this).select2({
            minimumResultsForSearch: 20,
            dropdownParent: $(this).next('.dropDownSelect2')
        });
    })
    </script>
    <!--===============================================================================================-->
    <script src="vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
    <!--===============================================================================================-->
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script>
    $('.js-pscroll').each(function() {
        $(this).css('position', 'relative');
        $(this).css('overflow', 'hidden');
        var ps = new PerfectScrollbar(this, {
            wheelSpeed: 1,
            scrollingThreshold: 1000,
            wheelPropagation: false,
        });

        $(window).on('resize', function() {
            ps.update();
        })
    });

    $('.btn-num-product-down').on('click', function() {

        var numProduct = Number($(this).next().val());
        if (numProduct == 1) {
            alert("Item can't eqal to 0");
        } else {
            if (numProduct > 0) $(this).next().val(numProduct - 1);
            var id = $(this).data('id');
            var price = $('#price_' + id).html();
            multiplication(numProduct - 1, price, id);
            total_sum();
        }
    });
    $('.btn-num-product-up').on('click', function() {
        var numProduct = Number($(this).prev().val());
        $(this).prev().val(numProduct + 1);
		var id = $(this).data('id');
        var price = $('#price_' + id).html();
        multiplication(numProduct + 1, price, id);
        total_sum();
    });

    $(document).ready(function() {
        total_sum();
    })

    function multiplication(numProduct, price, id) {
        var mul = numProduct * price;
        $("#result_" + id).html(mul);
    }

    function total_sum() {
        $(document).ready(function() {
            var t = $('#multi').length;
            var i = 1;
            var p, id;
            var total = 0;
            $('.total_price').each(function() {
                id = $(this).data('id');
                p = Number($('#result_' + id).html());
                total = total + p;
            });
            $('#total_amount').html(total);
            $('#final_checkout_amount').html(total);
        });
    }
    function datatake() {
        var discount = $('#code').val();
        // var cost = $('#final_checkout_amount').html();
        var cost = $('#total_amount').html();
        $.ajax({
            type: 'POST',
            url: 'process/promo_code.php',
            data: {
                "discount": discount,
            },
            dataType: 'json',
            async: false,
            success: function(data) {
                if (data.success) {
                    if (data.promo_type == 'P') {
                        var per = ((cost / 100) * data.promo_price).toFixed(2);
                        var final = cost - per;
                        if (final > 0) {
                            $('#final_checkout_amount').html(final);
                            $('#final_discount_amount').html(per);
                        }
                    } else {
                        var final = cost - data.promo_price;
                        $('#final_checkout_amount').html(final);
                        $('#final_discount_amount').html(data.promo_price);
                    }

                } else {
                    alert('data.message');
                }
            }
        });

    }
    </script>
    <!--===============================================================================================-->
   
    <script src="js/main.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>

</body>

</html>