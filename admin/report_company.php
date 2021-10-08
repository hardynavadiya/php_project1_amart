<?php 
  include "php/maincode/session.php";
  include "php/report_company.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>A-Mart Smart Shopping-company report</title>
    <!--favicon-->
    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/responsive/2.2.3/css/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- simplebar CSS-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
    <!-- Bootstrap core CSS-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <!--Data Tables -->
    <link href="assets/plugins/bootstrap-datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/bootstrap-datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- animate CSS-->
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
    <!-- Icons CSS-->
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
    <!-- Sidebar CSS-->
    <link href="assets/css/sidebar-menu.css" rel="stylesheet"/>
    <!-- Custom Style-->
    <link href="assets/css/app-style.css" rel="stylesheet"/>
    <style type="text/css">
      .btn {
      font-size: 10px;
      padding: 8px 17px;
      }
    </style>
  </head>
  <body>
    <!-- Start wrapper-->
    <div id="wrapper">
      <?php require "include/sidebar.php"?>
      <?php require "include/header.php"?>
      <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <form method="post" action="">
            <!-- Breadcrumb-->
            <h5>FROM-DATE TO TO-DATE</h5>
            <div id="dateragne-picker">
              <div class="input-daterange input-group col-sm-10">
                <input type="date" class="form-control" name="from">
                <div class="input-group-prepend">
                 <span class="input-group-text">To</span>
                </div>
                <input type="date" class="form-control" name="to"> &nbsp;&nbsp;
                <button type="submit" class="btn btn-success waves-effect waves-light m-1" id="submit">submit</button>
              </div>
            </div>
          </form>
        </div>

        <br>
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              <h4 class="page-title">Company Report</h4>
            </div>
          </div>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
              </div>
            </div>
          </div>
          <!-- End Row-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header"><i class="fa fa-table"></i> Data Exporting</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <?php if($com > 0) { ?>
                      <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>User id</th>
                            <th>user name</th>
                            <th>name</th>
                            <th>email id</th>
                            <th>mobile no</th>
                            <th>address</th>
                            <th>city name</th>
                            <td>state name</td>
                            <th>established</th>
                            <th>gst no</th>
                            <th>created</th>
                            <th>updated</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            foreach($com as $key=>$value)
                            {
                            ?> 
                          <tr>
                            <td><?php echo $key+1 ?></td>
                            <td><?php echo $value['U_id'] ?></td>
                            <td><?php echo $value['U_fname'] ?></td>
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
                          </tr>
                          <?php 
                            } 
                            ?>
                        </tbody>
                        <tfoot>
                        </tfoot>
                      </table>
                    <?php } else { ?> <h5 style="text-align: center;">Please Select Fromdate to Todate</h5>
                    <?php } ?>
                </div>
              </div>
            </div>
          </div>
          <!-- End Row-->
        </div>
        <!-- End container-fluid-->
      </div>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      <?php require "include/footer.php"?>
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
    <!--Data Tables js-->
    <script src="assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/dataTables.buttons.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.bootstrap4.min.js"></script>
    <!-- responisive -->
    <script src="//cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/jszip.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/pdfmake.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/vfs_fonts.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.html5.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.print.min.js"></script>
    <script src="assets/plugins/bootstrap-datatable/js/buttons.colVis.min.js"></script>
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
      
       });
      
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
    <!--Sweet Alerts -->
    <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
    <script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>
  </body>
</html>