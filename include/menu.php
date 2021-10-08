<!--Start-Mainmenu-area -->
<div class="mainmenu-area hidden-sm hidden-xs">
    <div id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 hidden-sm hidden-xs">
                    <div class="log-small"><a class="logo" href="index.php"><img alt="OurStore" src="images/logo/1.png"></a></div>
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">
                                <?php
                                foreach ($view_cat as $value) 
                                {
                                    include "php/view_subcat_particular.php";
                                    if ($data) {
                                ?>
                                <li class="angle-down"><a><?php echo $value['Cat_name']; ?></a>
                                    <ul class="sub-menu">
                                        <?php
                                            foreach ($data as $key => $value) {
                                        ?>
                                            <li><a href="show_product?cat=<?php echo $value['Cat_id']?>&sub=<?php echo $value['Sub_cat_id']?>"><?php echo $value['Sub_cat_name']; ?></a></li>
                                        <?php
                                            }
                                            unset($data);
                                        ?>
                                    </ul>
                                </li>
                                <?php }else {
                                    ?>
                                    <li><a href=""><?php echo $value['Cat_name']; ?></a>
                                    <?php
                                } } ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End-Mainmenu-area-->