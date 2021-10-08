<div class="footer-top-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-5 col-xs-12">
                <div class="footer-logo">
                    <a href="index.php"><img src="images/logo/1.png" alt="Logo Demo"></a>
                </div>
                <!--footer-text-start-->
                <div class="footer-top-content">
                    <p class="des">
                        A-Mart Smart Shopping , This website provide a facility to in auction base selling purchasing and without auction also.This website provide a lots of facility.        
                    </p>
                </div>
                <!--footer-text-end-->
            </div>
            <!--footer-tag-area-start-->
            <div class="tag-area">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h3 class="wedget-title">Related Tags</h3>
                    <div class="footer-top-content">
                        <ul>
                            <?php
                                foreach ($view_cat as $key => $value) { ?>
                                    <li><a><?php echo $value['Cat_name']; ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--footer-tag-area-end-->
            <!--footer-account-area-start-->
            <div class="footer-account-area footer-none">
                <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12">
                    <h3 class="wedget-title">My account</h3>
                    <div class="footer-top-content">
                        <ul>
                            <li><a href="myaccount.php">My Account</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--footer-account-area-end-->
            <!--footer-contact-info-start-->
            <div class="footer-contact-info">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <h3 class="wedget-title">Contact Us</h3>
                    <div class="footer-contact">
                        <p class="adress"><label>Head Office:</label><span class="ft-content">43 ,sahjanand soc, 80 foot road, near uttamnagar, ahmedabad </p>
                        <p class="phone"><label>phone:</label><span class="ft-content phone-num"><span class="phone1">9998800262</span><span class="phone2">8866983044</span></span></p>
                        <p class="web"><label>email:</label><span class="ft-content web-site"><a href="mailto:admin@infinitelayout.com">info.amart@gmail.com</a></span></p>
                    </div>
                </div>
            </div>
            <!--footer-contact-info-end-->
        </div>
    </div>
</div>
<!--footer-top-area-end-->
<!--footer-bottom-area-start-->
<div class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="copy-right">
                    <span> Copyright &copy; <a href="http://infinitelayout.com/">amart</a>. All Rights Reserved.</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            </div>
        </div>
    </div>
</div>
<!--footer-bottom-area-end-->