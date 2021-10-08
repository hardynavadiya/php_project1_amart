<?php
  include "php/view_cat.php";
  include "php/maincode/session.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>A-Mart Smart Shopping-View subcategory</title>
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
      <?php require "include/header.php" ?>
      <?php require "include/sidebar.php" ?>
      <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumb-->
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              <!-- <h4 class="page-title">Form Layouts</h4> -->
            </div>
          </div>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <div class="card-title text-success">Add Subcategory</div>
                  <hr>
                  <form action="php/add_subcat.php" method="post" id="signupForm">
                    <div class="form-group">
                      <label for="input-6">Category Name</label>
                      <select name="Cat_id" required class="form-control form-control-rounded" id="Cat_id" placeholder="Enter Category Name">
                        <option value="">select one</option>
                        <?php
                          foreach ($view_cat as $value)
                          {
                            echo "<option value='$value[Cat_id]'>$value[Cat_name]</option>";
                          }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="input-6">Subcategory Name</label>
                      <input type="text" name="Sub_cat_name" class="form-control form-control-rounded" id="Sub_cat_name" placeholder="Enter Category Name">
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-success btn-round shadow-success px-5" id="submit">submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--End Row-->
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
    <!--Form Validatin Script-->
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script>
      $().ready(function() {
      $("#personal-info").validate();
        // validate signup form on keyup and submit
      $("#signupForm").validate({     
          rules: {     
              Cat_id: {     
                  required: true            
              },
              Sub_cat_name: {     
                  required: true            
              },
            },
          messages: {
              Cat_id: "Please select the Category",  
              Sub_cat_name: "Please enter subcategory name"   
          }
       });
    });
    </script>
  </body>
</html>