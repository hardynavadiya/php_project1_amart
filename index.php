<?php
    include "php/arrival_product.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping</title>
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
        <!--header-area-start-->
        <!--Start-main-wrapper-->
        <div class="page-1">
            <!--Start-Header-area-->
            <header>
                <?php require "include/login.php"?>  
                <?php require "include/header.php"?>
                <?php require "include/menu.php" ?>
                <?php require "include/mobile_menu.php" ?>
            </header>
            <!--End-Header-area-->
            <!-- Start-slider-->
            <section class="slider-area home-1">
                <div class="preview-1">
                    <div id="ensign-nivoslider" class="slides">
                        <img src="images/slider/img1.jpg" alt="" title="#slider-direction-1" />
                        <img src="images/slider/img2.jpg" alt="" title="#slider-direction-2" />
                        <img src="images/slider/img3.jpg" alt="" title="#slider-direction-2" />
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-1" class="t-cn slider-direction slider-one">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-right">
                                    <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1">
                                            <h2 class="title1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay=".8s">Always in <span class="h-color">different</span></h2>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-2">
                                            <p class="title2">
                                                <span class="fashion-1 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3 hidden-xs">
                                            <p class="title3 wow bounceInLeft" data-wow-duration="0.5s" data-wow-delay="1.5s" >Real Deal,Best Deal,Crazy Deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- direction 2 -->
                    <div id="slider-direction-2" class="slider-direction slider-two">
                        <div class="slider-progress"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 text-left">
                                    <div class="slider-content">
                                        <!-- layer 1 -->
                                        <div class="layer-1-1">
                                            <h2 class="title1 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay=".8s">Always in <span class="h-color">different</span></h2>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-2">
                                            <p class="title2">
                                                <span class="fashion-1 fashion-2 wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1s"><i class="fa fa-modx"></i>
                                                </span>
                                            </p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3 layer-2-3 hidden-xs">
                                            <p class="title3  wow bounceInRight" data-wow-duration="0.5s" data-wow-delay="1.5s" >Real Deal,Best Deal,Crazy Deal</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End-slider-->
            <!-- Start-banner-area-->
            <div class="banner-area padding-t banner-dis1">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="single-banner banner-r-b">
                                <a><img alt="Hi Guys" src="images/banner/1.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="single-banner banner-m-b">
                                <a><img alt="Hi Guys" src="images/banner/2.jpg" /></a>
                            </div>
                            <div class="single-banner banner-r-b">
                                <a><img alt="Hi Guys" src="images/banner/3.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="single-banner banner-4">
                                <a><img alt="Hi Guys" src="images/banner/4.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End-banner-area-->
            <!-- Start-featured-area-->
            <div class="featured-product-wrap padding-t padding-dis">
                <div class="container">
                    <!-- section-heading start -->
                    <div class="section-heading">
                        <h3><span class="h-color">Auction</span> PRODUCTS</h3>
                    </div>
                    <!-- section-heading end -->
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="features-tab">
                                <div class="tab-content">
                                    <!--start-home-section-->
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="row">
                                            <div class="featured-carousel indicator">
                                                <!-- Start-single-product -->
                                                <?php foreach ($new_arrival as $key => $value) {
                                                    if($value['P_type'] == 0) {
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
                                                <div class="col-lg-3">
                                                    <div class="single-product">
                                                        <div class="product-img-wrap">
                                                            <a href="bidding_product?id=<?php echo $value['P_id'] ?>" class="product-img">     
                                                                <?php
                                                                $img  = json_decode($value['P_image']);
                                                                    ?>
                                                                    <img src="images/product/<?php echo $img[0] ?>" alt="product-image" />
                                                            </a>
                                                        </div>
                                                        <div class="product-info text-center">
                                                            <div class="product-content">
                                                                <a href="bidding_product?id=<?php echo $value['P_id'] ?>">
                                                                    <h3 class="pro-name"><?php echo $value[P_name] ?></h3>
                                                                </a>
                                                                <div class="pro-price">
                                                                    <a href="bidding_product?id=<?php echo $value['P_id'] ?>">
                                                                        <span class="price-text">Price:</span>
                                                                        <span class="normal-price">₹<?php echo $value[P_price] ?></span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="upcoming-product featured-count">
                                                            <div data-countdown="<?php echo $bid ?>"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End-single-product -->
                                                <?php }}} ?>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end-home-section-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-featured-area-->
            <!--Start-latest-trend-area-->
            <div class="latest-trend-wrap">
                <div class="bg-trend"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                            <div class="trend-content">
                                <h3>The</h3>
                                <h1>Latest Trend</h1>
                                <p>This season must-haves...</p>
                            </div>
                        </div>
                        <div class="trend-product">
                            <!-- Start-single-product -->
                            <?php 
                                if($value['P_type'] == 0) {
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
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                                <div class="single-product trend-pro">
                                    <div class="product-img-wrap">
                                         <a href="bidding_product?id=<?php echo $value['P_id'] ?>" class="product-img">
                                            <?php
                                                $img = json_decode($value['P_image']);
                                                ?>
                                                <img src="images/product/<?php echo $img[0] ?>" alt="product-image" style="width:800px;" />
                                        </a>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                             <a href="bidding_product?id=<?php echo $value['P_id'] ?>" class="product-img">
                                                <h3 class="pro-name"><?php echo $value['P_name']?></h3>
                                            </a>
                                            <div class="pro-price">
                                                <a href="bidding_product?id=<?php echo $value['P_id'] ?>" class="product-img">
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">₹<?php echo $new_arrival[0]['P_price']; ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upcoming-product">
                                        <div data-countdown="<?php echo $bid ?>"></div>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                            <!-- End-single-product -->
                        </div>
                    </div>
                </div>
            </div>
            <!--End-latest-trend-area-->
            <div class="clear"></div>
            <!--Start-banner-area-->
            <div class="banner-area padding-t banner-dis11">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                            <div class="single-banner banner-r-b">
                                <a href="#"><img alt="Hi Guys" src="images/banner/5.jpg" /></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                            <div class="single-banner">
                                <a href="#"><img alt="Hi Guys" src="images/banner/6.jpg" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End-banner-area-->
            <div class="clear"></div>
            <!--Start-new-arrival-random-wrap-->
            <div class="new-arrival-random-products-wrap padding-t">
                <div class="container">
                    <div class="row">
                        <!--Start-new-arrival-wrap-->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <!-- section-heading start -->
                            <div class="section-heading new-arriv">
                                <h3><span class="h-color">New</span> Arrivals</h3>
                            </div>
                            <!-- section-heading end -->
                            <div class="row">
                                <div class="newarrival-carousel indicator">
                                    <!-- Start-single-product -->
                                    <?php
                                        $new_arrival1 = $new_arrival;
                                        rsort($new_arrival1);
                                    ?>
                                    <?php foreach ($new_arrival1 as $key => $value) { ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img-wrap">
                                                <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img">   
                                                    <?php
                                                        $img = json_decode($value['P_image']);
                                                        ?>
                                                        <img src="images/product/<?php echo $img[0] ?>" alt="product-image" style="width:800px;" />
                                                </a>
                                                <div class="add-to-link">
                                                    <a class="wish" data-value="<?php echo $value[P_id]?>" style="cursor: pointer;">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="addcart" data-value="<?php echo $value[P_id]?>" style="cursor: pointer;" title="add to cart">
                                                        <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info text-center">
                                                <div class="product-content">
                                                    <a href="full_product?id=<?php echo $value['P_id'] ?>"> 
                                                        <h3 class="pro-name"><?php echo $value['P_name']?></h3>
                                                    </a>
                                                    <div class="pro-price">
                                                         <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img"> 
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                          </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--End-new-arrival-wrap-->
                        <!--Start-random-wrap-->
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 random-section">
                            <!-- section-heading start -->
                            <div class="section-heading new-arriv">
                                <h3><span class="h-color">Random</span> Products</h3>
                            </div>
                            <!-- section-heading end -->
                            <div class="row">
                                <div class="newarrival-carousel indicator">
                                    <!-- Start-single-product -->
                                    <?php
                                        $new_arrival1 = $new_arrival; 
                                        shuffle($new_arrival1); 
                                    ?>
                                    <?php foreach ($new_arrival1 as $key => $value) {  ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="single-product">
                                            <div class="product-img-wrap">
                                                <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img">  
                                                    <?php
                                                            $img = json_decode($value['P_image']);
                                                            ?>
                                                            <img src="images/product/<?php echo $img[0] ?>" alt="product-image" style="width:800px;" />
                                                </a>
                                                <div class="add-to-link">
                                                    <a class="wish" data-value="<?php echo $value[P_id]?>" style="cursor: pointer;">
                                                        <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                                    </a>
                                                </div>
                                                <div class="add-to-cart">
                                                    <a class="addcart" data-value="<?php echo $value[P_id]?>" style="cursor: pointer;" title="add to cart">
                                                        <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info text-center">
                                                <div class="product-content">
                                                    <a href="full_product?id=<?php echo $value['P_id'] ?>">  
                                                        <h3 class="pro-name"><?php echo $value['P_name']?></h3>
                                                    </a>
                                                    <div class="pro-price">
                                                        <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img">  
                                                            <span class="price-text">Price:</span>
                                                            <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End-single-product -->
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <!--End-random-wrap-->
                    </div>
                </div>
            </div>
            <!--end-new-arrival-random-wrap-->
            <div class="clear"></div>
            <!--Start-latest-products-wrap-->
            <div class="latest-products-wrap padding-t">
                <div class="container">
                    <div class="latest-content text-center">
                        <div class="section-heading">
                            <h3><span class="h-color">Without Auction</span> Products</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="featured-carousel indicator">
                            <!-- Start-single-product -->
                            <?php foreach ($new_arrival as $key => $value) { ?>
                            <?php if($value['P_type'] == 1) { ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                <div class="single-product">
                                   
                                    <div class="product-img-wrap">
                                         <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img"> 
                                            <?php
                                                $img = json_decode($value['P_image']);
                                                ?>
                                                <img src="images/product/<?php echo $img[0] ?>" alt="product-image" style="width:800px;" />     
                                        </a>
                                        <div class="add-to-link">
                                            <a class="wish" data-value="<?php echo $value[P_id]?>" style="cursor: pointer;">
                                                <div><i class="fa fa-heart"></i><span>Add to Wishlist</span></div>
                                            </a>
                                        </div>
                                        <div class="add-to-cart">
                                            <a class="addcart" data-value="<?php echo $value[P_id] ?>" style="cursor: pointer;" title="add to cart">
                                                <div><i class="fa fa-shopping-cart"></i><span>Add to cart</span></div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-info text-center">
                                        <div class="product-content">
                                            <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img"> 
                                                <h3 class="pro-name"><?php echo $value['P_name']?></h3>
                                            </a>
                                            <div class="pro-price">
                                                <a href="full_product?id=<?php echo $value['P_id'] ?>" class="product-img"> 
                                                    <span class="price-text">Price:</span>
                                                    <span class="normal-price">₹<?php echo $value['P_price']?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>
                            <!-- End-single-product -->
                        </div>
                    </div>
                </div>
            </div><br><br>
            <!--End-latest-products-wrap-->
            <!--Start-footer-wrap-->
            <footer class="footer-area">
                <?php require "include/footer.php" ?>
            </footer>
            <!--End-footer-wrap-->
        </div>
        <!--End-main-wrapper-->
        <!--strat-Quickview-product -->
        <div id="quickview-wrapper">
            <!-- Modal -->
            <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <!-- modal-content-start-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="modal-product">
                                <!-- product-images -->
                                <div class="product-images">
                                    <div class="main-image images">

                                        <a class="product-img" href="full_product?id=<?php echo $product['P_id'] ?>"> 
                                                                <?php
                                                                    $img = json_decode($product['P_image']);
                                                                ?>
                                                                <img src="images/product/<?php echo $img[0] ?>" alt="product-image" />
                                                            </a>
                                            
                                    </div>
                                </div>
                                <!-- product-images -->
                                <!-- product-info -->
                                <div class="product-info">
                                    <h1>Sample Product</h1>
                                    <div class="price-box-3">
                                        <div class="s-price-box">
                                            <span class="normal-price">£333.00</span>
                                        </div>
                                    </div>
                                    <a href="shop-grid.html" class="see-all">See all features</a>
                                    <div class="quick-add-to-cart">
                                        <form method="post" class="cart">
                                            <div class="numbers-row">
                                                <input type="number" id="french-hens" value="3">
                                            </div>
                                            <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                    </div>
                                    <div class="quick-desc">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero.
                                    </div>
                                    <div class="social-sharing">
                                        <div class="widget widget_socialsharing_widget">
                                            <h3 class="widget-title-modal">Share this product</h3>
                                            <ul class="social-icons">
                                                <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                                <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                                <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- product-info -->
                            </div>
                            <!-- modal-product -->
                        </div>
                        <!-- modal-body -->
                    </div>
                    <!-- modal-content -->
                </div>
                <!-- modal-dialog -->
            </div>
            <!-- END Modal -->
        </div>
        <!-- End-quickview-product -->
      
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
        <script type="text/javascript">
            $(function() {
                $("#scat").change(function(){
                    id = $(this).val();
                    $('#search').attr('action','filter_cat?cat='+id);
                });
            });
        </script>
    </body>
</html>