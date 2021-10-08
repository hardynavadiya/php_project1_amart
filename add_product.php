<?php
    include "php/maincode/session.php";
    include "php/view_com_product.php";
    include "php/check_company.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - add Product</title>
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
                                <p>Add Product</p>
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
                                    <li class="shop-pro">Add Product</li>
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
                                <h2 class="price text-success">Add Product</h2>
                                <form action="php/add_product.php" method="post" enctype="multipart/form-data" id="signupForm">
                                    <div class="col-lg-12 text-center" style="font-size: 20px; color: #057f75cc;">
                                        <input type="radio" name="P_type" style="height:16px;width: 16px;" type="radio" value="0">Auction &nbsp;&nbsp;
                                        <input type="radio" name="P_type" style="height:16px;width: 16px;" type="radio" value="1" checked>Without Auction
                                    </div>

                                    <div class="col-lg-6">
                                        <label>Category Name</label>
                                        <select class="form-control" id="cat" name="Cat_id" required>
                                                <option value="">select one</option>
                                                <?php
                                                foreach ($view_cat as $value)
                                                {
                                                    echo "<option value='$value[Cat_id]'>$value[Cat_name]</option>";
                                                }
                                                ?>
                                            </select>  
                                    </div>
                                    <div class="col-lg-6">
                                        <label>Subcategory</label>
                                        <select class="form-control form-control-rounded" id="subcat" name="Sub_cat_id" required>
                                            <option value="">select one</option> 
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Company</label>
                                        <select class="form-control form-control-rounded" id="company" name="C_id">
                                            <option value="">select one</option> 
                                            <?php
                                                foreach ($com as $value)
                                                {
                                                    echo "<option value='$value[C_id]'>$value[C_name]</option>";
                                                }
                                                ?>
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Product name</label>
                                        <input type="text" name="P_name" placeholder="Enter the Product name" required id="P_name"/>    
                                    </div>
                                    <div class="col-lg-12" id="box">
                                        <label class="col-lg-12">Product Details</label>
                                        <div id="1">
                                            <div class="col-lg-5">
                                                <input type="text" name="P_detail"  placeholder="e.g. Color" required id="P_detail[]" />
                                            </div> 


                                            <div class="col-lg-5">
                                                <input type="text" name="P_detail1"  placeholder="e.g. Green" required id="P_detail1[]"/>
                                            </div> 

                                            <div class="col-lg-1">
                                                <i class="fa fa-plus" id="plus" style="cursor: pointer;" onclick="add()"></i>
                                            </div> 

                                            <div class="col-lg-1">
                                                
                                            </div>
                                        </div>   
                                    </div>  
                                    <input type="hidden" value="1" id="value">  
                                    <div class="col-lg-12">
                                        <label id="price">Product Price</label>
                                        <input type="text" name="P_price" placeholder="Enter the Product Price" required id="P_price"/>    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Quantity</label>
                                        <input type="text" name="P_qty"  placeholder="Enter the product Quantity" required id="P_qty" />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Image</label>
                                        <input type="file" name="P_image[]" id="P_image" required multiple />    
                                    </div>
                                    <div style="display: none;" id="Auction">
                                        <div class="col-lg-12">
                                            <label>Bidding End Time</label>
                                            <input type="datetime-local"  placeholder="Enter the Bidding" id="btime"/>
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
        <script>
            function add(id){
                id = $('#value').val();
                id++;
                $('#value').val(id);
                $('#box').append('<div id="'+ id +'"><div class="col-lg-5"><input type="text" name="P_detail[]"  placeholder="Enter the Product Details" required /></div><div class="col-lg-5"><input type="text" name="P_detail1[]"  placeholder="Enter the Product Details" required /></div><div class="col-lg-1"><i class="fa fa-plus" id="plus" style="cursor: pointer;" onclick="add()"></i></div><div class="col-lg-1"><i class="fa fa-times" id="times" style="cursor: pointer;" onclick="remove('+ id +')"></i></div></div>');
            }
        </script>
        <script>
            function remove(id){
                $('#'+id).remove();
            }
        </script>
        <script>
            $('input[type=radio]').change(function(){
                if(this.value == 0){
                    $('#Auction').show();

                    $('#btime').attr("required","required");
                    
                    $('#btime').attr("name","P_bid_endtime");
                    $('#price').html('Starting Bidding Price');
                }
                else{
                    $('#Auction').hide();

                    $('#btime').removeAttr("required");

                    $('#btime').removeAttr("name");
                    $('#price').html('Product Price');
                }
            });
        </script>
        <script>
            $('#cat').on('change',function()
            {
                var a=$('#cat').val();
                $('#subcat').load('php/find_subcat?subcat='+a);
            });
        </script>
    <!--Form Validatin Script-->
    <script src="admin/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script>
      $().ready(function() {
      $("#personal-info").validate();
        // validate signup form on keyup and submit
      $("#signupForm").validate({     
          rules: {     
              Cat_id: {     
                  required: true            
              },
              Sub_cat_id: {
                  required: true
              },
              C_id: {
                  required: true
              },
              P_name: {
                  required: true
              },
              P_detail: { 
                  required: true
              },
              P_detail1: {
                  required: true
              },
              P_price: {
                  required: true
              },
              P_qty: {
                  required: true
              },
               P_image: {
                  required: true
              },
              P_bid_endtime:{
                 required: true
             },
          },
          messages: {
            Cat_id:"Please select category",
            Sub_cat_id:"Please select subcategory",
            C_id:"Please select company",
            P_name: "Please enter your product name",
            P_detail: "Enter your product detail",
            P_detail1: "Enter your product detail",
            P_price: "Enter your product price",
            P_qty: "Enter your product Quantity",
            P_image: "Upload your product image",
            P_bid_endtime: "Enter product bidding end time"
          }
       });
    });
    </script>
    </body>
</html>