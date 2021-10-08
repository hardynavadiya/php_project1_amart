<?php
  include "php/maincode/session.php"; 
  include "php/dashboard.php";
  include "php/dash_user.php";
  include "php/dash_product.php";
  include "php/dash_product1.php";
  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>A-Mart Smart Shopping - Admin</title>
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
  </head>
  <body>
    <!-- Start wrapper-->
    <div id="wrapper">
      <?php require "include/sidebar.php" ?>
      <?php require "include/header.php" ?>
      <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <!--Start Dashboard Content-->
          <div class="row mt-3">
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card gradient-bloody">
                <div class="card-body">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <p class="text-white">Total User</p>
                      <h4 class="text-white line-height-5"><?php echo $user ?></h4>
                    </div>
                     <div class="w-circle-icon rounded-circle border border-white">
                      <i class="fa fa-users text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card gradient-scooter">
                <div class="card-body">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <p class="text-white">Total Auction product</p>
                      <h4 class="text-white line-height-5"><?php echo $product ?></h4>
                    </div>
                    <div class="w-circle-icon rounded-circle border border-white">
                      <i class="fa fa-product-hunt text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card gradient-blooker">
                <div class="card-body">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <p class="text-white">Total Without Auction Product</p>
                      <h4 class="text-white line-height-5"><?php echo $wo_product ?></h4>
                    </div>
                    <div class="w-circle-icon rounded-circle border border-white">
                      <i class="fa fa-product-hunt text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-3">
              <div class="card gradient-ohhappiness">
                <div class="card-body">
                  <div class="media align-items-center">
                    <div class="media-body">
                      <p class="text-white">Total Order</p>
                      <h4 class="text-white line-height-5"><?php echo $order ?></h4>
                    </div>
                    <div class="w-circle-icon rounded-circle border border-white">
                      <i class="fa fa-pie-chart text-white"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--End Row-->
          <div class="row">
            <div class="col-12 col-lg-6 col-xl-8">
              <div class="card">
                <div class="card-header border-0">
                  All User Details
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last name</th>
                        <th>Email</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($view_user as $key => $value) { ?>
                          <tr>
                            <td><?php echo $value['U_fname'] ?></td>
                            <td><?php echo $value['U_lname'] ?></td>
                            <td><?php echo $value['U_email'] ?></td>
                          </tr>
                      <?php  } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--End Row-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-0">
                  All Auction products 
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Photo</th>
                        <th>Product ID</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <?php foreach ($view_product as $key => $value) { ?>
                    <tr>
                      <td><?php echo $value['P_name'] ?></td>
                      <td><?php
                        $img  = json_decode($value['P_image']); ?>
                        <img src="../images/product/<?php echo $img[0] ?>" alt="product-image" style="height: 50px;width: 50px;" />
                      </td>
                      <td><?php echo $value['P_id'] ?></td>
                      <td> ₹<?php echo $value['P_price'] ?></td>
                    </tr>
                   <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header border-0">
                  All Without Auction Product
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Photo</th>
                        <th>Product ID</th>
                        <th>Product Quantity</th>
                        <th>Amount</th>
                      </tr>
                    </thead>
                    <?php foreach ($view_product1 as $key => $value) { ?>
                    <tr>
                      <td><?php echo $value['P_name'] ?></td>
                      <td><?php
                        $img  = json_decode($value['P_image']); ?>
                        <img src="../images/product/<?php echo $img[0] ?>" alt="product-image" style="height: 50px;width: 50px;" />
                      </td>
                      <td><?php echo $value['P_id'] ?></td>
                      <td><?php echo $value['P_qty'] ?></td>
                      <td> ₹<?php echo $value['P_price'] ?></td>
                    </tr>
                   <?php } ?>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!--End Row-->
          <!--End Dashboard Content-->
        </div>
        <!-- End container-fluid-->
      </div>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      <?php require "include/footer.php" ?>
    </div>
    <!--End wrapper-->
    <!-- Bootstrap core JavaScript-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- simplebar js -->
    <script src="assets/plugins/simplebar/js/simplebar.js"></script>
    <!-- waves effect js -->
    <script src="assets/js/waves.js"></script>
    <!-- sidebar-menu js -->
    <script src="assets/js/sidebar-menu.js"></script>
    <!-- Custom scripts -->
    <script src="assets/js/app-script.js"></script>
    <!-- Chart js -->
    <script src="assets/plugins/Chart.js/Chart.min.js"></script>
    <!--Peity Chart -->
    <script src="assets/plugins/peity/jquery.peity.min.js"></script>
    <!-- Index js -->
    <script src="assets/js/index.js"></script>
  </body>
</html>