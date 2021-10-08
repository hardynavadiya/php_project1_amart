<?php
    session_start();
?>
<div class="header-top-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-top-left">
                    <div class="top-language">
                        Real Deal,Best Deal,Crazy Deal
                    </div>
                </div>
            </div>
            <!-- Start-Header-links -->
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="header-top-right">
                    <div class="top-link-wrap">
                        <div class="single-link">
                            <?php if (!isset($_SESSION["U_id"]) && empty($_SESSION["U_id"])) { ?>
                            <div class="my-account"><a href="myaccount"><span class=""> Registration</span></a></div>
                            <?php } else { ?>
                            <?php include "php/view_user.php"; ?>
                            <div class="mainmenu">
                                <nav>
                                    <ul id="nav">
                                        <li class="angle-down">
                                            <div class="my-account" style="background-color: #0b7774;"><a href="#"><span class=""> <?php echo $user['U_fname']; ?> </span></a></div>
                                            <ul class="sub-menu">
                                                <li><a href="profile">Profile</a></li>
                                                <li><a href="view_address">Address</a></li>
                                                <li><a href="company">Company</a></li>
                                                <li><a href="product">Product</a></li>
                                                <li><a href="selling">sell Products</a></li>
                                                <li><a href="Buying_order">Purchase Products</a></li>
                                                <li><a href="change_pwd">Change Password</a></li>
                                                <li><a href="php/logout">Logout</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <?php } ?>
                            <div class="wishlist"><a href="wishlist"><span class="">Wishlist</span></a></div>
                            <div class="check"><a href="view_address_checkout"><span class="">Checkout</span></a></div>
                            <?php if (!isset($_SESSION["U_id"]) && empty($_SESSION["U_id"])) { ?>
                            <div class="login"><a href="login"><span  class="">Log In</span></a></div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End-Header-links -->
        </div>
    </div>
</div>