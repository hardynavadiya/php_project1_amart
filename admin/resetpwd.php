<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>A-Mart  Smart Shopping-reset password</title>
        <!--favicon-->
        <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
        <!-- Bootstrap core CSS-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!-- animate CSS-->
        <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Icons CSS-->
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
        <!-- Custom Style-->
        <link href="assets/css/app-style.css" rel="stylesheet"/>
        <script type="text/javascript">
            function checkpass()
            {
                var npass=document.getElementById("npass").value;
                var cpass=document.getElementById("cpass").value;
                if(npass==cpass)
                {
                    document.getElementById("msg").innerHTML="";
                }
                else
                {
                    document.getElementById("msg").innerHTML="Enter the confirm password same as password";
                }
            }
        </script>
    </head>
    <body class="bg-dark">
        <!-- Start wrapper-->
        <div id="wrapper">
            <div class="card card-authentication1 mx-auto my-5">
                <div class="card-body">
                    <div class="card-content p-2">
                        <div class="text-center">
                            <img src="../images/logo/1.png" alt="logo icon" style="height: 53px;width: 125px;">
                        </div>
                        <div class="card-title text-uppercase text-center py-3">Reset Password</div>
                        <form action="php/resetpwd?a=<?php echo($_GET['u']); ?>&o=<?php echo($_GET['o']); ?>" method="post">
                            <div class="form-group">
                                <label for="exampleInputUsername" class="">New Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="password" id="npass" name="npass" class="form-control input-shadow" placeholder="Enter New password" required> 
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername" class="">Confirm Password</label>
                                <div class="position-relative has-icon-right">
                                    <input type="password" id="cpass" name="cpass" class="form-control input-shadow" placeholder="Enter confirmation password" required onkeyup="checkpass()"> 
                                    <div class="form-control-position">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <span id="msg" style="color: red;"></span>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary shadow-primary btn-block waves-effect waves-light">Submit</button>
                            <div class="form-row mt-4">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-center py-3">
                    <p class="text-muted mb-0">A-Mart Smart Shopping</p>
                </div>
            </div>
            <!--Start Back To Top Button-->
            <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
            <!--End Back To Top Button-->
        </div>
        <!--wrapper-->
        <!-- Bootstrap core JavaScript-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>
</html>