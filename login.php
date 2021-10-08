<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Amart-Smart Shopping - login</title>
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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  text-center">
                        <div class="single-ban-top-content">
                            <p>Login</p>
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
                                <li class="shop-pro">Login</li>
                            </ul>
                        </div>
                    </div>
                    <!--end-shop-head-->
                </div>
            </div>
        </div>
        <!--end-single-heading-->
        <!-- login-area start -->
        <div class="login-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="login-content banner-r-b">
                            <h2 class="price text-success">LOGIN</h2>
                            <p>Hello, Welcome to Your Account</p>   
                            <form action="php/login" method="post" id="signupForm">
                                <div>
                                    <label>Email Address</label>
                                    <input type="email" name="U_email" id="U_email" required placeholder="Enter the email id" />
                                </div>
                                <div>
                                    <label>Password</label>
                                    <input type="password" name="U_password" id="U_password" required placeholder="Enter the password"/>
                                </div>
                                <div class="login-lost">
                                    <!-- <span class="log-rem">
                                        <input type="checkbox" />
                                        <label>Remember me!</label>
                                    </span> -->
                                    <span class="forgot-login">
                                        <a href="forgetpwd">Forgot your password?</a>
                                    </span>
                                </div>
                                <input class="login-sub" type="submit" value="Login" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- login-area end -->
        
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
    <!--Form Validatin Script-->
    <script src="admin/assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script>
        $().ready(function() {
            // validate signup form on keyup and submit
            $("#signupForm").validate({     
                rules: {     
                    U_email: {
                        required: true,
                        email: true
                    },
                    U_password: {
                        required: true,
                        minlength: 3
                    },
                },
                messages: {
                    U_email: "Please enter a valid email id",
                    U_password: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                    },
                }
            });
        });
    </script>
</body>
</html>