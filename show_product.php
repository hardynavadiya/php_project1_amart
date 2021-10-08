<?php
    include 'php/getproduct.php';
    include "php/filter_price.php";
    include "php/view_cat.php";
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-mart Smart Shopping-Single product</title>
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
        <div class="shop-page shop-grid">
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
                                <p>Single Product Detail</p>
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
                                    <li class="shop-pro">Single Product</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!--start-shop-product-area-->
            <div class="shop-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <!-- Left-Sidebar-start-->
                            <div class="left-sidebar-title">
                                <h2>Shopping Options</h2>
                            </div>
                            <!-- Shop-Layout-start -->
                            <div class="left-sidebar">
                                <div class="shop-layout">
                                    <div class="layout-title">
                                        <h2>Category</h2>
                                    </div>
                                    <div class="layout-list">
                                        <ul>
                                            <?php foreach ($view_cat as $key => $value) { ?>
                                               <li><a href="filter_cat?cat=<?php echo $value[Cat_id]?>"><?php echo $value[Cat_name]?></a></li>
                                           <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Shop-Layout-end -->
                                <!-- Price-Filter-start -->
                                <form method="post">
                                    <div class="price-filter-area shop-layout">
                                        <div class="price-filter">
                                            <div class="layout-title">
                                                <h2>Price</h2>
                                            </div>
                                            <p>
                                              <label class="range-text">Range:</label>
                                              <input type="text" style="border:0; color:#f6931f; font-weight:bold;" readonly="" id="amount" name="price">
                                            </p>
                                            <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span></div>
                                            <input type="submit" value="show" class="btn btn-default">
                                        </div>
                                    </div>
                                </form>
                                <!-- Price-Filter-end -->
                            </div>
                            <!-- End-Left-Sidebar -->
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <!-- Shop-Product-View-start -->
                            <div class="shop-product-view">
                                <!-- Shop Product Tab Area -->
                                <div class="product-tab-area">
                                    <!-- Tab Bar -->
                                    <div class="tab-bar">
                                        <div class="tab-bar-inner">
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li class="active"><a title="Grid" data-toggle="tab" href="#shop-product"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                                <li><a  title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="toolbar">
                                            <div class="pager-list">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-Tab-Bar -->
                                    <!-- Tab-Content -->
                                    <div class="tab-content">
                                        <!-- Shop Product-->
                                        <div id="shop-product" class="tab-pane active">
                                            <div class="row">
                                                <!-- Start-single-product -->

                                                <?php
                                                if ($product) { 
                                                foreach ($product as $key => $value) { 
                                                    if($value[P_type] == 0){ 
                                                        date_default_timezone_set('Asia/Kolkata');
                                                        $bid = $value['P_bid_endtime'];

                                                        $timeFirst  = strtotime("now");
                                                        $timeSecond = strtotime($bid);

                                                        $differenceInSeconds = $timeSecond - $timeFirst;
                                                        $check = substr($differenceInSeconds,0,1);

                                                        $date=date_create($bid);
                                                        $bid = date_format($date,"Y/m/d h:i:s");

                                                        if($check != "-") {
                                                ?>
                                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="single-product shop-mar-bottom">
                                                    <div class="sale">Sale</div>
                                                    <div class="sale-border"></div>
                                                    <div class="new">new</div>
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="bidding_product?id=<?php echo $value['P_id'] ?>"> 
                                                                <?php
                                                                    $img = json_decode($value['P_image']);
                                                                ?>
                                                                <img src="images/product/<?php echo $img[0] ?>" alt="product-image" />
                                                            </a>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="bidding_product?id=<?php echo $value['P_id'] ?>"><h3 class="pro-name"><?php echo $value['P_name']?></h3></a>
                                                                <div class="pro-rating">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                        <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Starting Bidding Price:</span>
                                                                    <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                                </div>
                                                                <div class="upcoming-product featured-count">
                                                                    <div data-countdown="<?php echo $bid?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                                <?php } else {?>
                                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="single-product shop-mar-bottom">
                                                        <div class="product-img-wrap">
                                                            <a class="product-img" href="full_product?id=<?php echo $value['P_id'] ?>"> 
                                                                <?php
                                                                    $img = json_decode($value['P_image']);
                                                                ?>
                                                                <img src="images/product/<?php echo $img[0] ?>" alt="product-image" />
                                                            </a>
                                                            <div class="add-to-link">
                                                                <a class="wish" data-value="<?php echo $value['P_id'] ?>" style="cursor:pointer;">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                            </div>
                                                            <div class="add-to-cart">
                                                                <a title="add to cart" class="addcart"
                                                                data-value="<?php echo $value[P_id] ?>" style="cursor: pointer;">
                                                                    <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="full_product?id=<?php echo $value['P_id'] ?>"><h3 class="pro-name"><?php echo $value['P_name']?></h3></a>
                                                                <div class="pro-price">
                                                                    <span class="price-text">Price:</span>
                                                                    <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <?php 
                                                }}}else {
                                                ?>
                                                <h4 style="text-align: center; margin-bottom: 50px; font-weight: bold;">Product are not available</h4>
                                                <?php } ?>
                                                <!-- End-single-product -->
                                            </div>
                                        </div>
                                        <!-- End-Shop-Product-->
                                        <!-- Shop List -->
                                        <div id="shop-list" class="tab-pane">
                                            <!-- start-Single-Shop-list-->
                                            <?php foreach ($product as $key => $value) { 
                                                if($value[P_type] == 0){ 
                                                    date_default_timezone_set('Asia/Kolkata');
                                                    $bid = $value['P_bid_endtime'];

                                                    $timeFirst  = strtotime("now");
                                                    $timeSecond = strtotime($bid);

                                                    $differenceInSeconds = $timeSecond - $timeFirst;
                                                    $check = substr($differenceInSeconds,0,1);

                                                    $date=date_create($bid);
                                                    $bid = date_format($date,"Y/m/d h:i:s");

                                                    if($check != "-") {
                                            ?>
                                            <div class="single-shop">
                                                <div class="row">
                                                    <!-- single-product-start -->
                                                    <div class="single-product">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="product-img-wrap">
                                                                <a class="product-img" href="full_product?id=<?php echo $value['P_id'] ?>"> 
                                                                <?php 
                                                                    $img = json_decode($value['P_image']);
                                                                    foreach ($img as $key => $value1) { ?>
                                                                        <img src="images/product/<?php echo $value1 ?>" alt="product-image" />
                                                            <?php }?>
                                                            </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            <div class="product-info text-left">
                                                                <div class="product-content shop">
                                                                    <a href="#"><h3 class="pro-name"><?php echo $value['P_name']?></h3></a>
                                                                    <div class="pro-rating">
                                                                        <ul>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="pro-price">
                                                                        <span class="price-text">Starting Bidding Price:</span>
                                                                        <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            
                                                            <div class="shop-article text-left">
                                                            <?php
                                                                $p_detail = json_decode($value['P_detail']);
                                                                $p_detail1 = json_decode($value['P_detail1']);
                                                                foreach ($p_detail as $key => $value1) { ?>
                                                                    <p style="font-weight: bold;line-height: 0px;"><?php echo $value1; ?> : <span style="font-weight: lighter;"><?php echo $p_detail1[$key]; ?></span></p>
                                                                <?php } ?> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="upcoming-product featured-count">
                                                        <div data-countdown="<?php echo $bid ?>"></div>
                                                    </div>
                                                    <!-- single-product-end -->
                                                </div>
                                            </div>
                                        <?php }} else { ?>
                                        
                                            <div class="single-shop">
                                                <div class="row">
                                                    <!-- single-product-start -->
                                                    <div class="single-product">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="product-img-wrap">
                                                                <a class="product-img" href="full_product?id=<?php echo $value['P_id'] ?>"> 
                                                                <?php 
                                                                    $img = json_decode($value['P_image']);
                                                                    foreach ($img as $key => $value1) { ?>
                                                                        <img src="images/product/<?php echo $value1 ?>" alt="product-image" />
                                                            <?php }?>
                                                            </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            <div class="product-info text-left">
                                                                <div class="product-content shop">
                                                                    <a href="#"><h3 class="pro-name"><?php echo $value['P_name']?></h3></a>
                                                                    <div class="pro-rating">
                                                                        <ul>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li><i class="fa fa-star"></i></li>
                                                                            <li class="r-grey"><i class="fa fa-star"></i></li>
                                                                            <li class="r-grey"><i class="fa fa-star-half-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="pro-price">
                                                                        <span class="price-text">Price:</span>
                                                                        <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                                    </div>
                                                                </div>
                                                            </div><br>
                                                            <div class="shop-article text-left">
                                                            <?php
                                                                $p_detail = json_decode($value['P_detail']);
                                                                $p_detail1 = json_decode($value['P_detail1']);
                                                                foreach ($p_detail as $key => $value1) { ?>
                                                                    <p style="font-weight: bold;line-height: 0px;"><?php echo $value1; ?> : <span style="font-weight: lighter;"><?php echo $p_detail1[$key]; ?></span></p>
                                                                <?php } ?> 
                                                            </div>
                                                            <div class="shop-button-area">
                                                                <div class="add-to-cartbest shop">
                                                                    <a title="add to cart" class="addcart"
                                                                data-value="<?php echo $value[P_id] ?>" style="cursor: pointer;">
                                                                    <div></i><span>Add to cart</span></div>
                                                                </a>
                                                                </div>
                                                            </div>
                                                            <div class="add-to-link shop">
                                                                <a class="wish" data-value="<?php echo $value['P_id'] ?>" style="cursor:pointer;">
                                                                    <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- single-product-end -->
                                                </div>
                                            </div>
                                            <?php } }?>
                                            <!-- end-Single-Shop-list-->
                                        </div>
                                        <!-- End Shop List -->
                                    </div>
                                    <!-- End Tab Content -->
                                    <!-- Tab Bar -->
                                    <div class="tab-bar tab-bar-bottom">
                                        <div class="tab-bar-inner">
                                            <ul role="tablist" class="nav nav-tabs">
                                                <li class="active"><a title="Grid" data-toggle="tab" href="#shop"><i class="fa fa-th-large"></i><span class="grid" title="Grid">Grid</span></a></li>
                                                <li><a title="List" data-toggle="tab" href="#shop-list"><i class="fa fa-list"></i><span class="list">List</span></a></li>
                                            </ul>
                                        </div>
                                        <div class="toolbar">
                                        </div>
                                    </div>
                                    <!-- End Tab Bar -->
                                </div>
                                <!-- End Shop Product Tab Area -->
                            </div>
                            <!-- End Shop Product View -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <!--shop-product-area-end-->
            <?php require "include/footer.php"?>

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
		<!-- cascade-slider.js -->
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
            $('.addcart').on('click',function()
            {
                check = "<?php echo $_SESSION['U_id']?>";
                if(check){
                P_id = $(this).data('value');
                $.ajax({
                    type:'POST',
                    url:"php/addtocart.php",
                    data:{P_id},
                    datatype:"text",
                    success:function(data){
                        console.log(data);
                        alert("Your product is add to cart");
                    },
                    error:function(){alert("something went wrong");}
                });
            }
            else
            {
                alert("Please First Of all Create a new Account or login");
            }});
        </script>
        <script type="text/javascript">
            $('.wish').on('click',function()
            {
                check = "<?php echo $_SESSION['U_id']?>";
                if(check){
                P_id = $(this).data('value');
                $.ajax({
                    type:'POST',
                    url:"php/wish.php",
                    data:{P_id},
                    datatype:"text",
                    success:function(data){
                        console.log(data);
                        alert("your product is add to wishlist");
                    },
                    error:function(){alert("something went wrong");}
                });
            }
            else
            {
                alert("Please First Of all Create a new Account or login");
            }});
        </script>
    </body>
</html>
