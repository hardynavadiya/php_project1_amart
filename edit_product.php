<?php
 include "php/maincode/session.php";
 include "php/view_cat.php";
 include "php/view_com_product.php";
 include "php/select_product.php";

?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - edit product</title>
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
        <div class="blog-page">
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
                                <p>Edit product</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-single-heading-banner-->
            <!--start-single-heading-->
            <div class="signle-heading login-m">
                <div class="container">
                    <div class="row">
                        <!--start-shop-head -->
                        <div class="col-lg-12">
                            <div class="shop-head-menu">
                                <ul>
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Product</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!--start-my-account-area -->
            <div class="my-account-area login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="login-content login-margin">
                                <h2 class="price text-success">Edit Product</h2>
                                <form action="php/product_update" method="post">
                                    <div class="col-lg-12 text-center">          
                                        <input style="height: 16px;width: 16px;" type="radio" name="P_type" value="0" <?php if($pro['P_type'] == 0)  echo "checked"; ?>> Auction  
                                        <input style="height: 16px;width: 16px;" type="radio" name="P_type" value="1" <?php if($pro['P_type'] == 1)  echo "checked"; ?>> Without Auction
                                    </div>
                                    <div class="col-lg-6">          
                                        <label>Category name</label>
                                        <select class="form-control" id="cat" name="Cat_id">
                                            <?php
                                              foreach ($view_cat as $value)
                                              {
                                                if($value['Cat_id'] == $pro['Cat_id']) {
                                                  $select = 'selected';
                                                }
                                                else {
                                                  $select = "";
                                                }
                                                echo "<option value='$value[Cat_id]' $select>$value[Cat_name]</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">          
                                        <label>Subcategory name</label>
                                         <select class="form-control" id="subcat" name="Sub_cat_id">
                                       <?php
                                            $tablename = 'sub_category';
                                            $select = "*";
                                            $sub_id = $pro['Sub_cat_id'];
                                            $id = $pro['Sub_cat_id'];
                                            $where = "`Sub_cat_id` = $id";
                                            include "php/maincode/select_particular_array.php";

                                            foreach ($data as $value)
                                            {
                                                if($value['Sub_cat_id'] == $sub_id) {
                                                $select = 'selected';
                                            }
                                            else {
                                              $select = "f";
                                            }
                                            echo "<option value='$value[Sub_cat_id]' $select>$value[Sub_cat_name]</option>";
                                          }
                                          unset($data);
                                       ?> 
                                        </select>
                                    </div>
                                    <div class="col-lg-12">          
                                        <label>Company name</label>
                                            <select class="form-control" name="C_id">
                                               <?php
                                                foreach ($com as $value)
                                                {
                                                    if($value['C_id'] == $pro['C_id']) {
                                                      $select = 'selected';
                                                    }
                                                    else {
                                                      $select = "";
                                                    }
                                                    echo "<option value='$value[C_id]' $select>$value[C_name]</option>";
                                                }
                                                ?>
                                            </select>     
                                    </div>
                                    <div class="col-lg-12">          
                                        <label>Product name</label>
                                        <input type="text" name="P_name" value="<?php echo $pro[P_name] ?>" required />    
                                    </div>
                                     
                                    <div class="col-lg-12" id="box">
                                        <label class="col-lg-12">Product details</label>
                                        <?php
                                            $P_detail = json_decode($pro['P_detail']);
                                            $P_detail1 = json_decode($pro['P_detail1']);
                                            foreach ($P_detail as $key => $value) {
                                        ?>
                                        <div id="<?php echo $key + 1;?>">
                                            <div class="col-lg-5">
                                                <input type="text" name="P_detail[]" value="<?php echo $value ?>" required />
                                            </div>
                                            <div class="col-lg-5">
                                                <input type="text" name="P_detail1[]"  placeholder="E.g. red" value="<?php echo $P_detail1[$key] ?>" required />
                                            </div>
                                            <div class="col-lg-1">
                                                <i class="fa fa-plus" id="plus" style="cursor: pointer;" onclick="add()"></i>
                                            </div>
                                            <div class="col-lg-1">
                                                <?php
                                                if ($key != 0) {
                                                ?>
                                                    <i class="fa fa-times" id="times" style="cursor: pointer;" onclick="remove(<?php echo $key + 1;?>)"></i>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <?php }?>
                                    </div>
                                    <input type="hidden" value="<?php echo $key + 1;?>" id="value">
                                    <div class="col-lg-12">
                                        <label id="price">Product price</label>
                                        <input type="number" name="P_price"  placeholder="Enter the product price" pattern="{0-9}[10]" value="<?php echo $pro[P_price] ?>" required />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Quantity</label>
                                        <input type="text" name="P_qty"  placeholder="Enter the product Quantity" value="<?php echo $pro[P_qty] ?>" required />   
                                    </div>
                                    <div <?php if($pro['P_type'] == 1)  echo "style='display: none;'"; ?> id="Auction">
                                        <div class="col-lg-12">
                                            <label>Bidding End Time</label>
                                            <input type="datetime-local" placeholder="Enter the bidding" id="btime" value="2019-06-05T08:30"/>    
                                        </div>
                                    </div>
                                    <input class="login-sub" type="submit" value="submit" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-my-account-area -->
            
            <!--Start-footer-wrap-->
            <footer class="footer-area">
                <?php require "include/footer.php" ?>
            </footer>
            <!--End-footer-wrap-->
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
            function add() {
                id = $('#value').val();
                id++;
                $('#value').val(id);
                $('#box').append('<div id="'+ id +'"><div class="col-lg-5"><input type="text" name="P_detail[]"  placeholder="Enter the product detail" required /></div><div class="col-lg-5"><input type="text" name="P_detail1[]"  placeholder="Enter the product detail" required /></div><div class="col-lg-1"><i class="fa fa-plus" id="plus" style="cursor: pointer;" onclick="add()"></i></div><div class="col-lg-1"><i class="fa fa-times" id="times" style="cursor: pointer;" onclick="remove('+ id +')"></i></div></div>');
            }
        </script>
         <script type="text/javascript">
            function remove(id) {
                $('#'+id).remove();
            }
        </script>
        <script type="text/javascript">
            $('input[type=radio]').change(function () {
                if (this.value == 0) {
                    $('#Auction').show();

                    $('#btime').attr('required','required');

                    $('#btime').attr('name','P_bid_endtime');

                    $('#price').html('Starting bidding Price');
                }
                else {
                    $('#Auction').hide();
                    $('#btime').removeAttr('required');

                     $('#btime').removeAttr('name');

                     $('#price').html('Product price');
                }
            });
        </script>
        <script type="text/javascript">
            $('#cat').on('change',function(){
               // alert(234);
                var a=$('#cat').val();
                $('#subcat').load('php/find_subcat?subcat='+a);
                //alert (a);
            });
        </script>
    </body>
</html>
    