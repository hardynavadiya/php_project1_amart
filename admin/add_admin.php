<?php
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
    <title>A-Mart Smart Shopping - Add Admin</title>
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
    <script type="text/javascript">
      function checkpass()
      {
          var pass=document.getElementById("A_password").value;
          var cpass=document.getElementById("password").value;
          if(pass==cpass)
          {
              document.getElementById("msg").innerHTML="";
          }
          else
          {
              document.getElementById("msg").innerHTML="Enter confirm password same as password";
          }
      }
    </script>
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
              <h4 class="page-title">Add Admin</h4>
            </div>
          </div>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form id="signupForm" action="php/admin_insert.php" method="post" enctype="multipart/form-data">
                    <h4 class="form-header text-uppercase">
                      <i class="fa fa-address-book-o"></i>
                      Admin Profile
                    </h4>
                    <div class="form-group row">
                      <label for="input-10" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="A_name" name="A_name" required placeholder=" Enter Your Name">
                      </div>
                    </div>
                    <h4 class="form-header text-uppercase">
                      <i class="fa fa-envelope-o"></i>
                      Contact Info & Bio
                    </h4>
                    <div class="form-group row">
                      <label for="input-14" class="col-sm-2 col-form-label">E-mail</label>
                      <div class="col-sm-8">
                        <input type="email" class="form-control" id="A_email" name="A_email" required placeholder=" Enter Your Email-Id">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-17" class="col-sm-2 col-form-label">Address</label>
                      <div class="col-sm-8">
                        <textarea name="A_address" class="form-control" rows="2" id="A_address" required placeholder=" Enter Your Address"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-14" class="col-sm-2 col-form-label">Contact Number</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="A_mono" name="A_mono" required placeholder="Enter Your 10 digit Contact Number">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-16" class="col-sm-2 col-form-label">Front Proof </label>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" id="A_front_proof" name="A_front_proof">
                      </div>
                      <label for="input-16" class="col-sm-2 col-form-label">Back Proof </label>
                      <div class="col-sm-4">
                        <input type="file" class="form-control" id="A_back_proof" name="A_back_proof">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="input-14" class="col-sm-2 col-form-label">Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control"  name="A_password" id="A_password" required placeholder=" Enter the password">
                      </div>
                      <label for="input-14" class="col-sm-2 col-form-label">Confirm Password</label>
                      <div class="col-sm-4">
                        <input type="password" class="form-control" id="password" required placeholder=" Enter the confirmation password" onkeyup="checkpass()">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6">
                      </div>
                      <div class="col-sm-6">
                        <span id="msg" style="color: red;"></span>
                      </div>
                    </div>
                    <div class="form-footer">
                      <button type="reset" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                      <button type="submit" id="submit" class="btn btn-success"  /><i class="fa fa-check-square-o"></i>SAVE</button>
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
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      <?php require "include/footer.php" ?>
    </div>
    <!--End wrapper-->
    <!-- Bootstrap core JavaScript-->
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
              A_name: {     
                  required: true            
              },
              A_email: {
                  required: true,
                  email: true
              },
              A_address: {
                  required: true
              },
              A_front_proof: {
                  required: true
              },
              A_back_proof: { 
                  required: true
              },
              A_password: {
                  required: true,
                  minlength: 3
              },
              cpassword: {
                  required: true,
                  minlength: 3,
                  equalTo: "#password"
              },
              A_mono: {
                  required: true,
                  minlength: 10
              },
          },
          messages: {
              A_name: "Please enter your firstname",
              A_password: {
                  required: "Please enter password",
                  minlength: "Your password must be at least 3 characters long",
              },
              cpassword: {
                  required: "Please enter the password",
                  minlength: "Your password must be at least 3 characters long",
                  equalTo: "Please enter the same password as above"
              },
              A_email: "Please enter a valid email address",
              A_mono: "Please enter your 10 digit number",
              A_front_proof: "Please upload front proof image",
              A_back_proof: "Please upload back proof image",
              A_address: "Please enter your address"
          }
       });
    });
    </script>
  </body>
</html>

