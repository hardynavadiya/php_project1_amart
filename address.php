<?php
    include "php/maincode/session.php";
    include "php/view_state.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - address</title>
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
                                <p>Add Address Detail</p>
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
                                    <li class="shop-pro">Add Address Detail</li>
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
                                <h2 class="price text-success">Add Address Detail</h2>
                                <form action="php/address" method="post" id="signupForm">
                                    <div class="col-lg-12">
                                        <label>Mobile No:</label>
                                        <input type="text" name="Ud_mono" placeholder="Enter the Mobile name" required pattern="{0-9}[10]" title="only ten digit required"id="Ud_mono"/>   </div>
                                    
                                    <div class="col-lg-12">
                                        <label>Date of Birth</label>
                                        <input type="date" name="Ud_dob"  placeholder="Enter the date" required id="Ud_dob"/>    
                                    </div>

                                    <div class="col-lg-12">
                                        <label>House no</label>
                                        <input type="text" name="Ud_houseno"  placeholder="Enter the house number" required id="Ud_houseo"/>    
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Street Address</label>
                                        <input type="text" name="Ud_street_address"  placeholder="Enter the street  Address" required id="Ud_street_address"/>    
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Landmark</label>
                                        <input type="text" name="Ud_landmark"  placeholder="Enter the landmark" required id="Ud_landmark"/>    
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Zip code</label>
                                        <input type="number" name="Ud_zipcode"  placeholder="Enter the zipcode" required id="Ud_zipcode"/>    
                                    </div>

                                    <div class="col-lg-6">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="Ud_state">
                                            <option value="">select one</option>
                                            <?php
                                            foreach ($view_state as $value)
                                            {
                                                echo "<option value='$value[State_id]'>$value[State_name]</option>";
                                            }
                                            ?>
                                        </select>  
                                    </div>

                                    <div class="col-lg-6">
                                        <label>city</label>
                                        <select class="form-control form-control-rounded" id="city" name="Ud_city">
                                        <option value="">select one</option> 
                                        </select>
                                    </div>

                                    <input class="login-sub" type="submit" value="Submit" />
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
            $('#state').on('change',function()
            {
                var a=$('#state').val();
                $('#city').load('php/find_city?state='+a);
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
              Ud_mono: {
                  required: true,
                  value :10
              },
              Ud_dob: {
                  required: true
              },
              Ud_houseno: { 
                  required: true
              },
              Ud_street_address: {
                  required: true
              },
              Ud_landmark: {
                  required: true
              },
              Ud_zipcode: {
                  required: true,
                  value :6
              },
                Ud_city: {
                  required: true
              },
              Ud_state:{
                 required: true
             },
          },
          messages: {
            Ud_mono:"Please enter the mobile number",
            Ud_dob:"Please enter the date of birth",
            Ud_houseno: "Please enter the house number",
            Ud_street_address: "Please enter your Street Address",
            Ud_landmark: "please enter Your landmark",
            Ud_zipcode:"Please enter Zipcode",
            Ud_city: "Please Select your City",
            Ud_state: "Please Select State",
          }
       });
    });
    </script>
    </body>
</html>
