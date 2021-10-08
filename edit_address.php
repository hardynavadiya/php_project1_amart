<?php
    include "php/maincode/session.php";
    include "php/view_userdetail.php";
    include "php/view_state.php";
    ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - Edit address</title>
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
                                <p>Edit Address detail</p>
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
                                    <li class="shop-pro">Edit Address Detail</li>
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
                                <h2 class="login-title">Edit Address Details</h2>
                                <form action="php/address_update?id=<?php echo $ud['U_id'] ?>" method="post">
                                    <div class="col-lg-12">
                                        <input name="U_id" value="<?php echo $U_id = $_SESSION[U_id]?>" hidden />
                                        <label>Mobile no</label>
                                        <input type="text" name="Ud_mono" value="<?php echo $ud['Ud_mono'] ?>"  />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Date of Birth</label>
                                        <input type="date" name="Ud_dob"  value="<?php echo $ud['Ud_dob'] ?>" required />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>House no</label>
                                        <input type="text" name="Ud_houseno"  value="<?php echo $ud['Ud_houseno'] ?>" required />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Street address</label>
                                        <input type="text" name="Ud_street_address"  value="<?php echo $ud['Ud_street_address'] ?>" required />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Land mark</label>
                                        <input type="text" name="Ud_landmark"  value="<?php echo $ud['Ud_landmark'] ?>" required />    
                                    </div>
                                    <div class="col-lg-12">
                                        <label>Zip code</label>
                                        <input type="text" name="Ud_zipcode"  value="<?php echo $ud['Ud_zipcode'] ?>" required />    
                                    </div>
                                    <div class="col-lg-6">
                                        <label>State</label>
                                        <select class="form-control" id="state" name="Ud_state">
                                            <option value="">select one</option>
                                            <?php
                                                foreach ($view_state as $value)
                                                {
                                                  if($value['State_id'] == $ud['Ud_state']) {
                                                    $select = 'selected';
                                                  }
                                                  else {
                                                    $select = "";
                                                  }
                                                  echo "<option value='$value[State_id]' $select>$value[State_name]</option>";
                                                }
                                                ?>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label>city</label>
                                        <select class="form-control form-control-rounded" id="city" name="Ud_city">
                                            <?php
                                            $tablename = 'cities';
                                            $select = "*";
                                            $sub_id = $ud['Ud_city'];
                                            $id = $ud['Ud_state'];
                                            $where = "`State_id` = $id";
                                            include "php/maincode/select_particular_array.php";

                                            foreach($data as $value)
                                            {
                                                if($value['City_id'] == $Sub_id){
                                                $select = 'selected';
                                            }
                                            else{
                                                $select = "f";
                                            }
                                            echo "<option value='$value[City_id]' $select>$value[City_name]</option>";
                                            }
                                            unset($data);
                                            ?>
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
    </body>
</html>