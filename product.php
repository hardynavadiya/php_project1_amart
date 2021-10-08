<?php
    include "php/maincode/session.php";
    include "php/view_product.php";
    include "php/check_company.php";
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>A-Mart Smart Shopping - product Datatable</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,800i" rel="stylesheet">
        <!-- favicon icon -->
        <link rel="shortcut icon" type="images/png" href="images/favicon.ico">
        <!-- responsive -->
        <!--  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css"> -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
        <!-- all css here -->
        <link rel="stylesheet" href="style.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <!--Data Tables -->
        <link href="admin/assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
        <link href="admin/assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
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
                                <p>Your Product Detail</p>
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
                                    <li><i class="fa fa-home"></i><a class="shop-home" href="index.html"><span>Home</span></a><span><i class="fa fa-angle-right"></i></span></li>
                                    <li class="shop-pro">Product Detail</li>
                                </ul>
                            </div>
                        </div>
                        <!--end-shop-head-->
                    </div>
                </div>
            </div>
            <!--end-single-heading-->
            <!--start-my-account-area -->
            <div class="login-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="login-content login-margin">
                                <h2 class="price text-success">Product Details</h2>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <?php if($product > 0) { ?> 
                                        <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Category name</th>
                                                    <th>Subcategory name</th>
                                                    <th>Company name</th>
                                                    <th>Product name</th>
                                                    <th>Product detail</th>
                                                    <th>Product detail1</th>
                                                    <th>price</th>
                                                    <th>quantity</th>
                                                    <th>Image</th>
                                                    <th>bidding end time</th>
                                                    <th>created</th>
                                                    <th>updated</th>
                                                    <th>Admin status</th>
                                                    <th>action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($product as $key=>$value) { ?> 
                                                <tr>
                                                    <td><?php echo $key+1 ?></td>
                                                    <td><?php echo $value['Cat_name'] ?></td>
                                                    <td><?php echo $value['Sub_cat_name'] ?></td>
                                                    <td><?php echo $value['C_name'] ?></td>
                                                    <td><?php echo $value['P_name'] ?></td>
                                                    <td><?php echo $value['P_detail'] ?></td>
                                                    <td><?php echo $value['P_detail1'] ?></td>
                                                    <td>₹<?php echo $value['P_price'] ?></td>
                                                    <td><?php echo $value['P_qty'] ?></td>
                                                    <td>
                                                        <?php
                                                            $img = json_decode($value['P_image']);
                                                            foreach ($img as $key => $value1) { ?>
                                                        <img src="images/product/<?php echo $value1; ?>" style="height: 50px">
                                                        <?php } ?>
                                                    </td>
                                                    <td><?php echo $value['P_bid_endtime'] ?></td>
                                                    <td><?php echo $value['P_created'] ?></td>
                                                    <td><?php echo $value['P_updated'] ?></td>
                                                    <td>
                                                        <?php if($value['P_status'] == 1){ ?>
                                                        <p>product is added</p>
                                                        <?php } else { ?>
                                                        <p>product is not added</p>
                                                        <?php } ?>
                                                    </td>
                                                    <td style="padding: 0px;">
                                                        <?php if($value['P_u_status'] == 0) { ?>
                                                        <a href="php/changestatus_product?id=<?php echo $value['P_id']?>">
                                                        <button type="button" class="btn btn-dark waves-effect waves-light m-1" style="background-color: #172b4b; color: white;"><i class="fa fa-times" aria-hidden="true"></i> <span>Deactive</span> </button>
                                                        </a>
                                                        <?php } else { ?>
                                                        <a href="php/changestatus_product?id=<?php echo $value['P_id']?>">
                                                        <button type="button" class="btn btn-dark waves-effect waves-light m-1" style="background-color: #172b4b; color: white;"><i class="fa fa-check" aria-hidden="true"></i> <span>Active</span> </button>
                                                        </a>
                                                        <?php } ?>
                                                        <a href="edit_product?id=<?php echo $value['P_id'] ?>">
                                                        <button type="button" class="btn btn-success waves-effect waves-light btn-sm" id="sweet-14"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</button>
                                                        </a>
                                                        
                                                        <a href="php/product_delete?id=<?php echo $value['P_id'] ?>">
                                                        <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="sweet-14"><i class="fa fa-trash" aria-hidden="true"></i> <span>Delete</span></button>
                                                        </a>

                                                        <button type="button" class="btn btn-info waves-effect waves-light m-1" data-toggle="modal" data-target="#a<?php echo $value['P_id'] ?>"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Add Product image</span> </button>

                                                        <button type="button" class="btn btn-warning waves-effect waves-light m-1" data-toggle="modal" data-target="#e<?php echo $value['P_id'] ?>"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Edit product image</span> </button>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                        

                                        <?php foreach ($product as $row) { ?>
                                        <!-- The Modal  for add image-->
                                        <div class="modal fade" id="a<?php echo $row['P_id'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Add Product image</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <form id="signupForm" action="php/add_image_product?id=<?php echo($row['P_id']); ?>" method="post" enctype="multipart/form-data">
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="input-10" class="col-sm-2 col-form-label">Add product image</label>
                                                                <div class="col-sm-8">
                                                                    <input type="file" class="form-control" id="input-10" name="P_image[]" multiple>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary">Save</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- The Modal  for edit image-->
                                        <div class="modal fade" id="e<?php echo $row['P_id'] ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Product image</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <form id="signupForm" action="php/product_image_update?id=<?php echo($row['P_id']); ?>" method="post" enctype="multipart/form-data">
                                                        <!-- Modal body -->
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="input-10" class="col-sm-2 col-form-label"> product image</label>
                                                                <div class="col-sm-8">
                                                                    <?php
                                                                        $img = json_decode($row['P_image']);
                                                                        foreach ($img as $key => $value1) { ?>&nbsp;<?php echo $key +1;?>&nbsp;&nbsp;
                                                                        <img src="images/product/<?php echo $value1; ?>" style="height: 50px">
                                                                    <?php } ?> &nbsp;
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="input-10" class="col-sm-2 col-form-label">Edit product image</label>
                                                                <div class="col-sm-8">
                                                                    <select class="form-control single-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" id="image" name="P_image_name">
                                                                        <option value="">select one</option>
                                                                        <?php
                                                                            $image = json_decode($row['P_image']);
                                                                            foreach ($image as $key => $value){
                                                                                    $k = $key +1;
                                                                                    echo "<option value=$key>$k - $value</option>";
                                                                                }
                                                                            ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group row">
                                                                <label for="input-10" class="col-sm-2 col-form-label">Edit product image</label>
                                                                <div class="col-sm-8">
                                                                    <input type="file" class="form-control" id="input-10" name="P_image">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- Modal footer -->
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-secondary">Save</button>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php }} else { ?> 
                                            <h4 style="text-align: center;">your product is not currently added</h4>
                                        <?php } ?>
                                        <a href="add_product"> 
                                        <button type="submit" class="btn btn-success btn-round shadow-success px-5" style="float: right; border-radius: 20px; background-color: #0b7774;">Add product</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end-my-account-area -->
            
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
        <!--Data Tables js-->
        <script src="admin/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
        <script src="admin/assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
        <!-- responisive -->
        <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
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
        <script>
            $('#state').on('change',function()
            {
                var a=$('#state').val();
                $('#city').load('php/find_city?state='+a);
            });
        </script>
    </body>
</html>