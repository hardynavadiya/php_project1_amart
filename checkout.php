<?php
    include "php/maincode/session.php";
    include "php/check_address_checkout.php";
    include "php/view_cart.php";
   
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping-Checkout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">

        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="images/favicon.ico">

		<!-- all css here -->

		<link rel="stylesheet" href="style.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Add your site or application content here -->
        <!--Start-Preloader-area-->
        <div class="preloader">
            <div class="loading-center">
                <div class="loading-center-absolute">
                    <div class="object object_one"></div>
                    <div class="object object_two"></div>
                    <div class="object object_three"></div>
                </div>
            </div>
        </div>
        <!--end-Preloader-area-->
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="checkout-page">
            <!--Start-Header-area-->
            <header>
                <?php require "include/login.php" ?>
                <?php require "include/header.php" ?>
                <?php require "include/menu.php" ?>
                <?php require "include/mobile_menu.php" ?>
                
            </header>
            <!--End-Header-area-->
            <!--start-single-heading-banner-->
            <div class="single-banner-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                            <div class="single-ban-top-content">
                                <p>Checkout</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.php"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Checkout</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!-- coupon-area start -->
            <div class="coupon-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- coupon-area end -->
            <!-- checkout-area start -->
            <div class="checkout-area">
                <div class="container">
                    <div class="row">
                        <form action="php/add_purchase" method="post">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="your-order">
                                    <h3>Your order</h3>
                                    <h4 style="color: #057f75cc">A-Mart Smart Shopping</h4>
                                    <div class="your-order-table table-responsive">
                                        <?php if($cart > 0){?>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th class="product-remove"><span class="nobr">Remove</span></th>
                                                    <th class="product-name" style="font-weight: bold;">Product</th>
                                                    <th class="product-total" style="font-weight: bold;">qty</th>
                                                    <th class="product-total" style="font-weight: bold;">price</th>
                                                    <th class="product-total" style="font-weight: bold;">total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($cart as $key => $value) { ?>
                                                    <?php if($value[Cart_qty]){$total += $value['P_price']* $value['Cart_qty'];} else {$total += $value['P_price'];} ?>
                                                    <input type="hidden" name="P_id[]" value="<?php echo $value['P_id']; ?>">
                                                    <input type="hidden" name="P_price[]" value="<?php echo $value['P_price']; ?>">
                                                <tr class="cart_item">
                                                    <th class="product-remove"><a class="remove" data-value="<?php echo $value[Cart_id]?>" style="cursor: pointer;">X</a></th>
                                                    <td><?php echo $value['P_name']; ?></td>
                                                    <td><?php if($value['Cart_qty']){echo $value['Cart_qty'];} else{echo "-";}?></td>
                                                    <td>₹<?php echo $value['P_price']; ?></td>
                                                    <td>
                                                        ₹<?php if($value[Cart_qty]) {echo $value[P_price] * $value[Cart_qty]; }  else { echo $value[P_price]; } ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr class="order-total">
                                                    <th style="font-weight: bold;">Order Total</th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td><strong><span class="amount">₹<?php echo $total; ?></span></strong>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                       
                                    </div>
                                    <div class="payment-method">
                                        <div class="order-button-payment">
                                            <a href="address"><input type="submit" value="Place order" /></a>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                            <h4 style="text-align: center;">No order</h4>
                                    <?php } ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div><br>
            <!-- checkout-area end -->
            <?php require "include/footer.php" ?>

        </div>
        <!--End-main-wrapper-->

		<!-- all js here -->
		<!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
		<!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
		<!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
		<!-- meanmenu.js -->
        <script src="js/jquery.meanmenu.js"></script>
		<!-- nivo.slider.js -->
        <script src="lib/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="lib/home.js" type="text/javascript"></script>
		<!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
		<!-- scrollUp.min.js -->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- jquery.parallax.js -->
        <script src="js/jquery.parallax.js"></script>
		<!-- sticky.js -->
        <script src="js/jquery.sticky.js"></script>
		<!-- jquery.simpleGallery.min.js -->
        <script src="js/jquery.simpleGallery.min.js"></script>
        <script src="js/jquery.simpleLens.min.js"></script>
        <!-- countdown.min.js -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- isotope.pkgd.min -->
        <script src="js/isotope.pkgd.min.js"></script>
		<!-- wow js -->
        <script src="js/wow.min.js"></script>
		<!-- plugins js -->
        <script src="js/plugins.js"></script>
		<!-- main js -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
            $('.remove').on('click',function()
            {
                Cart_id = $(this).data('value');
                $.ajax({
                    type:'POST',
                    url:"php/cart_delete.php",
                    data:{Cart_id},
                    datatype:"text",
                    success:function(data){
                        console.log(data);
                        alert("successfully product remove in orderlist");
                        location.reload();
                    },
                    error:function(){alert("something went wrong");}
                });
            });
    </script>     
    </body>
</html>
