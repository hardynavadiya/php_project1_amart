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
          var pass=document.getElementById("pass").value;
          var cpass=document.getElementById("cpass").value;
          if(pass==cpass)
          {
              document.getElementById("submit").disabled=false;
              document.getElementById("msg").innerHTML="";
          }
          else
          {
              document.getElementById("submit").disabled=true;
              document.getElementById("msg").innerHTML="Enter the confirm password same as new password";
          }
      }
    </script>
  </head>
  <body>
    <div id="wrapper">
      <?php require "include/header.php" ?>
      <?php require "include/sidebar.php" ?>
      <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumb-->
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              <h4 class="page-title">Change Password</h4>
            </div>
          </div>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <form id="signupForm" action="php/change_pwd.php" method="post" enctype="multipart/form-data">
                    <h4 class="form-header text-uppercase">
                      <i class="fa fa-address-book-o"></i>
                      Change Password
                    </h4>
                    <div class="form-group row">
                      <label for="input-14" class="col-sm-2 col-form-label">Old Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" required placeholder=" Enter the old password" name="opass">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="input-14" class="col-sm-2 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" required placeholder=" Enter the new password" name="npass" id="pass">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="input-14" class="col-sm-2 col-form-label">Confirm Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="cpass" required placeholder=" Enter the confirmation password"  onkeyup="checkpass()" />
                      </div>
                    </div>

                    <div>
                      <span id="msg" style="color: red; font-weight: bold;"></span>
                    </div>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i> CANCEL</button>
                      <button type="submit" id="submit" class="btn btn-success"  disabled /><i class="fa fa-check-square-o"></i>SAVE</button>
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
              A_password: {
                  required: true,
                  minlength: 3
              },
              cpassword: {
                  required: true,
                  minlength: 3,
                  equalTo: "#password"
              },
          },
          messages: {
              A_password: {
                  required: "Please provide a password",
                  minlength: "Your password must be at least 3 characters long",
              },
              cpassword: {
                  required: "Please enter the password",
                  minlength: "Your password must be at least 3 characters long",
                  equalTo: "Please enter the same password as above"
              },
          }
       });
    });
    </script>
  </body>
</html>