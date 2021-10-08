<?php 
    include 'php/full_product.php';   
    include 'php/view_rat.php';   
    include 'php/view_rev.php';   
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-mart Smart Shopping-Full product</title>
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
        <style type="text/css">
            img.productimg {
                width: 100px;
                height: 100px;
            }
        </style>
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
        <div class="single-page">
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
                                <p>Full product Detail</p>
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!--start-shop-head -->
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.php"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Single Product</li>
                                </ul>
                            </div>
                            <!--end-shop-head-->
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!--start-signle-page-->
            <div class="single-page-area padding-t">
                <!-- Single Product details Area -->
                <div class="single-product-details-area">
                    <!-- Single Product View Area -->
                    <div class="single-product-view-area">
                        <div class="container">
                            <div class="row"> 
                                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                                    <!-- Single Product View -->
                                    <div class="single-procuct-view">
                                        <!-- Simple Lence Gallery Container -->
                                        <div class="simpleLens-gallery-container" id="p-view">
                                            <div class="simpleLens-container tab-content">
                                                <?php 
                                                    $img = json_decode($product['P_image']);
                                                    foreach ($img as $key => $value) { 
                                                ?>
                                                <div class="tab-pane <?php if($key == 0) { ?>active<?php } ?>" id="p-view-<?php echo $key+1; ?>">
                                                    <div class="simpleLens-big-image-container">
                                                        <a class="simpleLens-lens-image" data-lens-image="images/product/<?php echo $value; ?>">
                                                            <img src="images/product/<?php echo $value; ?>" class="simpleLens-big-image" alt="product">
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <!-- Simple Lence Thumbnail -->
                                            <div class="simpleLens-thumbnails-container text-center">
                                                <div id="single-product" class="owl-carousel custom-carousel">
                                                    <ul class="nav nav-tabs" role="tablist">
                                                        <?php foreach ($img as $key => $value) { ?>
                                                        <li class="<?php if($key == 0) { ?>active<?php } ?>">
                                                            <a href="#p-view-<?php echo $key+1; ?>" role="tab" data-toggle="tab">
                                                                <img src="images/product/<?php echo $value; ?>" alt="productd" class="productimg">
                                                            </a>
                                                        </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- End Simple Lence Thumbnail -->
                                        </div>
                                        <!-- End Simple Lence Gallery Container -->
                                    </div>
                                    <!-- End Single Product View -->
                                </div>
                                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 single-product-details">
                                    <div class="single-pro">
                                        <div class="product-name">
                                            <h3><?php echo $product['P_name']?></h3>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <div class="product-content">
                                            <div class="pro-price single-p">
                                                <span class="price-text">Price:</span>
                                                <span class="normal-price">₹<?php echo $product['P_price'] ?></span>
                                            </div>
                                        </div>
                                        <div class="product-reveiw">
                                            <?php
                                                $p_detail = json_decode($product['P_detail']);
                                                $p_detail1 = json_decode($product['P_detail1']);
                                                foreach ($p_detail as $key => $value) { ?>
                                                    <p style="font-weight: bold;line-height: 0px;"><?php echo $value; ?> : <span style="font-weight: lighter;"><?php echo $p_detail1[$key]; ?></span></p>
                                                <?php } ?>
                                        </div>
                                        <div class="clear"></div>
                                        
                                        <div class="">
                                            <div class="quick-add-to-cart">
                                                <form method="post" class="cart">
                                                    <div class="qty-button">
                                                        <input type="text" class="input-text qty" title="Qty" value="<?php echo $product['P_qty']?>" maxlength="12" id="qty" name="qty">

                                                        <div class="box-icon button-plus">
                                                            <input type="button" class="qty-increase " onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty )) qty_el.value++;return false;" value="+">
                                                        </div>
                                                        <div class="box-icon button-minus">
                                                            <input type="button" class="qty-decrease" onclick="var qty_el = document.getElementById('qty'); var qty = qty_el.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) qty_el.value--;return false;" value="-">
                                                        </div>
                                                    </div>
                                                    <div class="add-to-cartbest single-add">
                                                        <a title="add to cart" class="addcart"
                                                            data-value="<?php echo $product[P_id] ?>" style="cursor: pointer;">
                                                                <div><span><i class="fa fa-shopping-cart"></i> Add to cart</span></div>
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- social-markting end -->
                                        <div class="clear"></div>
                                        <div class="single-pro-cart">
                                            <div class="add-to-link single-p">
                                                <a class="wish" data-value="<?php echo $product['P_id'] ?>" style="cursor:pointer;">
                                                    <div><i class="fa fa-heart"><span>Add to Wishlist</span></i></div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="social-icon-img">
                                            <div class="sharethis-inline-share-buttons"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Product View Area -->
                </div>
                <!-- End Single details Area -->
            </div>
            <!--End-signle-page-->
        </div>
        <!--End-upsell-products-wrap-->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="product-description-tab custom-tab">
                        <!-- tab bar -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#product-des" data-toggle="tab">Rating</a></li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-des">
                                <div class="tab-pane active" id="product-rev">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="product-rev-right">
                                                <div class="product-rev-right-table table-responsive"> 
                                                    <table>
                                                        <tr>
                                                            <th style="text-decoration: underline; font-size: 15px; font-weight: bold;">User name</th>
                                                            <th style="text-decoration: underline; font-size: 15px; font-weight: bold;">Rating</th>
                                                        </tr>
                                                        <?php
                                                            if($rat) { 
                                                            foreach ($rat as $key => $value) { ?>
                                                        <tr>
                                                            <th><?php echo $value['U_fname'] ?></th>
                                                            <th><?php echo $value['Rating']?></th>
                                                        </tr>
                                                        <?php }} ?>
                                                    </table>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-description-tab custom-tab">
                        <!-- tab bar -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="active"><a href="#product-des" data-toggle="tab">Review</a></li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="product-des">
                                <div class="tab-pane active" id="product-rev">
                                    <div class="row">
                                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                            <div class="product-rev-right">
                                                <div class="product-rev-right-table table-responsive"> 
                                                     <table>
                                                        <tr>
                                                            <th style="text-decoration: underline; font-size: 15px; font-weight: bold;">User name</th>
                                                            <th style="text-decoration: underline; font-size: 15px; font-weight: bold;">Review</th>
                                                        </tr>
                                                        <?php
                                                            if ($rev) { 
                                                            foreach ($rev as $key => $value) { ?>
                                                        <tr>
                                                            <th><?php echo $value['U_fname'] ?></th>
                                                            <th><?php echo $value['Review']?></th>
                                                        </tr>
                                                        <?php }} ?>
                                                     </table>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
               
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
        <!-- countdown.min.js -->
        <script src="js/jquery.countdown.min.js"></script>
        <!-- isotope.pkgd.min -->
        <script src="js/isotope.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <script type="text/javascript" src="../../platform-api.sharethis.com/js/sharethis.js#property=59cb402cfdc69400125961d2&product=inline-share-buttons"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
        <script type="text/javascript">
            $('.addcart').on('click',function()
            {
                check = "<?php echo $_SESSION['U_id']?>";
                if(check){
                P_id = $(this).data('value');
                Cart_qty = $('#qty').val();
                $.ajax({
                    type:'POST',
                    url:"php/addtocart.php",
                    data:{P_id,Cart_qty},
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
