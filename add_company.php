<?php
    include "php/maincode/session.php";
    include "php/view_state.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - add company</title>
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
                                <p>Add Company</p>
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
                                    <li class="shop-pro">Add Company</li>
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
                                <h2 class="price text-success">Add Company Detail</h2>
                                <form action="php/add_company" method="post" enctype="multipart/form-data" id="signupForm">
                                    <div class="col-lg-12">
                                        <!-- <input name="U_id" value="<?php echo $U_id = $_SESSION[U_id]?>" hidden /> -->
                                        <label>Company name</label>
                                        <input type="text" name="C_name" placeholder="Enter the Company name" required id="C_name"/>    
                                    </div>
                                    
                                    <div class="col-lg-12">
                                        <label>Email Address</label>
                                        <input type="email" name="C_email"  placeholder="Enter the Email Address" required id="C_email"/>    
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Mobile no</label>
                                        <input type="text" name="C_mono"  placeholder="Enter the Mobile number" required id="C_mono"/>    
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Address</label>
                                        <input type="text" name="C_address"  placeholder="Enter the  Address" required id="C_address"/>    
                                    </div>

                                    <div class="col-lg-6">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="C_state">
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
                                        <select class="form-control form-control-rounded" id="city" name="C_city">
                                        <option value="">select one</option> 
                                        </select>
                                    </div>

                                    <div class="col-lg-12">
                                        <label>Established Year</label>
                                        <select class="form-control" id="basic-select" name="C_established" id="C_established">
                                            <option value="">select year</option>
                                            <option value="1999">1999</option>
                                            <option value="2000">2000</option>
                                            <option value="2001">2001</option>
                                            <option value="2002">2002</option>
                                            <option value="2003">2003</option>
                                            <option value="2004">2004</option>
                                            <option value="2005">2005</option>
                                            <option value="2006">2006</option>
                                            <option value="2007">2007</option>
                                            <option value="2008">2008</option>
                                            <option value="2009">2009</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                        </select>   
                                    </div>

                                    <div class="col-lg-12">
                                        <label>GST no</label>
                                        <input type="text" name="C_gstno"  placeholder="Enter the GST number" required id="C_gstno"/>
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
              C_name: {
                  required: true
              },
              C_email: {
                  required: true
              },
              C_mono: { 
                  required: true
              },
              C_address: {
                  required: true
              },
              C_state: {
                  required: true
              },
              C_city: {
                  required: true
              },
                C_established: {
                  required: true
              },
              C_gstno:{
                 required: true
             },
          },
          messages: {
            C_name:"Please enter the company name",
            C_email:"Please enter the emailid",
            C_mono: "Please enter the mobilenumber",
            C_address: "Please enter your Address",
            C_state: "please select any state",
            C_city:"Please select any city",
            C_established: "Please enter the Established year",
            C_gstno: "Please enter the GST number",
          }
       });
    });
    </script>
    </body>
</html>
