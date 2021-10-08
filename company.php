<?php
    include "php/maincode/session.php";
    include "php/view_company.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - company Datatable</title>

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">
        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="images/favicon.ico">
        <!-- responsive -->
        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        <!-- responsive end -->
        <!-- all css here -->
        <link rel="stylesheet" href="style.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
        <!--Data Tables -->
        <link href="admin/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="admin/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <!-- animate CSS-->
        <link href="admin/assets/css/animate.css" rel="stylesheet" type="text/css"/>
        <!-- Icons CSS-->
        <link href="aadmin/ssets/css/icons.css" rel="stylesheet" type="text/css"/>
        <!-- Sidebar CSS-->
        <link href="admin/assets/css/sidebar-menu.css" rel="stylesheet"/>
        <!-- Custom Style-->
        <link href="admin/assets/css/app-style.css" rel="stylesheet"/>
        <style type="text/css">
            .btn {
            font-size: 10px;
            padding: 8px 17px;
            }
        </style>
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
                                <p>Your Company Detail</p>
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
                                    <li><i class="fa fa-home"></i>
                                        <a class="shop-home" href="index.html"><span>Home</span></a>
                                        <span><i class="fa fa-angle-right"></i></span>
                                    </li>
                                    <li class="shop-pro">Company Detail</li>
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
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="login-content login-margin">
                                <h2 class="login-title">your company Details</h2>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php if($com > 0) { ?> 
                                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>name</th>
                                                    <th>email id</th>
                                                    <th>mobile no</th>
                                                    <th>address</th>
                                                    <th>city</th>
                                                    <th>state</th>
                                                    <th>established</th>
                                                    <th>gst no</th>
                                                    <th>created</th>
                                                    <th>updated</th>
                                                    <th>Admin status</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    foreach($com as $key=>$value)
                                                    {
                                                    ?> 
                                                <tr>
                                                    <td><?php echo $key+1 ?></td>
                                                    <td><?php echo $value['C_name'] ?></td>
                                                    <td><?php echo $value['C_email'] ?></td>
                                                    <td><?php echo $value['C_mono'] ?></td>
                                                    <td><?php echo $value['C_address'] ?></td>
                                                    <td><?php echo $value['City_name'] ?></td>
                                                    <td><?php echo $value['State_name'] ?></td>
                                                    <td><?php echo $value['C_established'] ?></td>
                                                    <td><?php echo $value['C_gstno'] ?></td>
                                                    <td><?php echo $value['C_created'] ?></td>
                                                    <td><?php echo $value['C_updated'] ?></td>
                                                    <td><?php if($value['C_status'] == 1) { ?> 
                                                            <p>company is added</p>
                                                        <?php } else { ?>
                                                            <p>company is not added</p>
                                                        <?php } ?>
                                                    </td>

                                                    <td style="padding: 0px;">
                                                        <?php if($value['C_u_status'] == 0) { ?>
                                                        <a href="php/changestatus_user?id=<?php echo $value['C_id']?>">
                                                            <button type="button" class="btn btn-dark waves-effect waves-light m-1" style="background-color: #172b4b; color: white;"><i class="fa fa-times" aria-hidden="true"></i> <span>Deactive</span> </button> 
                                                        </a>
                                                        <?php } else { ?>
                                                        <a href="php/changestatus_user?id=<?php echo $value['C_id']?>">
                                                            <button type="button" class="btn btn-dark waves-effect waves-light m-1" style="background-color: #172b4b; color: white;"><i class="fa fa-check" aria-hidden="true"></i> <span>Active</span> </button> 
                                                        <?php } ?></a>

                                                        <a href="edit_company?id=<?php echo $value['C_id'] ?>">
                                                        <button type="button" class="btn btn-success waves-effect waves-light btn-sm" id="sweet-14"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button></a>
                                                        
                                                        <a href="php/company_delete?id=<?php echo $value['C_id'] ?>">
                                                            <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="sweet-14"><i class="fa fa-trash" aria-hidden="true"></i> <span>Delete</span></button></a>
                                                    </td>
                                                </tr>
                                                <?php 
                                                    } 
                                                    ?>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                        <?php } else { ?> <h4 style="text-align: center;">Your Company is not Currently Added</h4>
                                        <?php
                                            }
                                            ?>
                                        <a href="add_company"> 
                                        <button type="submit" class="btn btn-success btn-round shadow-success px-5" style="float: right; border-radius: 20px; background-color: #0b7774;">Add company</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!--end-my-account-area -->
                </div>
            </div>
        </div>
            
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
        <script src="admin/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
        <!-- responisive -->
        <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
        <!-- responsive end-->
        <script>
      $(document).ready(function() {
      
       //Default data table
      
        $('#default-datatable').DataTable();
        var table = $('#example').DataTable( {
         responsive: true, 
         buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
       } );
       table.on('draw.dt', function(){
         $('input').iCheck({
           checkboxClass: 'icheckbox_flat-green'
         });
       });
      table.buttons().container()
         .appendTo( '#example_wrapper .col-md-6:eq(0)' );
       } );    
    </script>
    <script type="text/javascript">
      document.querySelector('#sweet-14').onclick = function(){
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, delete it!",
          cancelButtonText: "No, cancel plx!",
          closeOnConfirm: false,
          closeOnCancel: false
        },
        function(isConfirm) {
          if (isConfirm) {
            swal("Deleted!", "Your imaginary file has been deleted.", "success");
          } else {
            swal("Cancelled", "Your imaginary file is safe :)", "error");
          }
        });
      };
    </script>
        <script>
                $('#state').on('change',function()
                {
                    var a=$('#state').val();
                    $('#city').load('php/find_city?state='+a);
                });
        </script>
    </body>
</html>