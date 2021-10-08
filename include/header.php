<?php
    include "php/view_cat.php";
?>
<!--Start-header-mid-area-->
<div class="header-mid-wrap">
    <div class="container">
        <div class="header-mid-content">
            <div class="row">
                <!--Start-logo-area-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="header-logo">
                        <a href="index"><img src="images/logo/1.png" alt="OurStore" style="width: 233px;height: 100px;"></a>
                    </div>
                </div>
                <!--End-logo-area-->
                <!--Start-gategory-searchbox-->
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div id="search-category-wrap">
                        <form class="header-search-box" method="post" action="filter_cat" id="search">
                            <div class="search-cat">
                                <select class="category-items" name="category" id="scat" required>
                                    <option value="">All Categories</option>
                                    <?php foreach ($view_cat as $value) { ?>
                                    <option value="<?php echo $value['Cat_id']; ?>"><?php echo $value['Cat_name']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <input type="search" placeholder="Search here..." id="text-search" name="search">
                            <button id="btn-search-category" type="submit">
                            <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <!--End-gategory-searchbox-->
                <!--Start-cart-wrap-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <ul class="header-cart-wrap">
                        <!-- <?php include "php/view_cart.php"?> -->
                        <li><a class="cart" href="view_cart">My Cart: <?php echo sizeof($cart) ?></a>
                        </li>
                    </ul>
                </div>
                <!--End-cart-wrap-->
            </div>
        </div>
    </div>
</div>
<!--End-header-mid-area-->
