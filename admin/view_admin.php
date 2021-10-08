<?php
  include "php/maincode/session.php"; 
  include "php/view_admin.php"; 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>A-Mart Smart Shopping-View Admin</title>
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
          <!-- Breadcrumb-->
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              <h4 class="page-title">View Admin</h4>
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
                <div class="card-header"><i class="fa fa-table"></i>Data Exporting</div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered dt-responsive nowrap display responsive">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>name</th>
                          <th>email id</th>
                          <th>mobile no</th>
                          <th>address</th>
                          <th>front proof</th>
                          <th>back proof</th>
                          <th>created</th>
                          <th>updated</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          foreach($data as $key=>$value)
                          {
                          ?> 
                        <tr>
                          <td><?php echo $key+1 ?></td>
                          <td><?php echo $value['A_name'] ?></td>
                          <td><?php echo $value['A_email'] ?></td>
                          <td><?php echo $value['A_mono'] ?></td>
                          <td><?php echo $value['A_address'] ?></td>
                          <td>
                            <img src="assets/images/proof/front proof/<?php echo $value['A_front_proof']?>" style="height: 50px;">
                          </td>
                          <td>
                            <img src="assets/images/proof/back proof/<?php echo $value['A_back_proof']?>" style="height: 50px;">
                          </td>
                          <td><?php echo $value['A_created'] ?></td>
                          <td><?php echo $value['A_updated'] ?></td>
                          <td style="padding: 0px;">
                            <?php if($value['A_status'] == 0) { ?>
                            <a href="php/changestatus_admin?id=<?php echo $value['A_id']?>">
                            <button type="button" class="btn btn-dark waves-effect waves-light m-1"><i class="fa fa-times" aria-hidden="true"></i> <span>Deactive</span> </button></a>
                            <?php } else { ?>
                            <a href="php/changestatus_admin?id=<?php echo $value['A_id']?>">
                            <button type="button" class="btn btn-dark waves-effect waves-light m-1"><i class="fa fa-check-circle-o" aria-hidden="true"></i> <span>Active</span> </button>
                            <?php } ?></a>
                            
                            <button type="button" class="btn btn-success waves-effect waves-light m-1" data-toggle="modal" data-target="#a<?php echo $value['A_id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span>Edit</span> </button>

                            <a href="php/admin_delete?id=<?php echo $value['A_id'] ?>">
                            <button type="button" class="btn btn-danger waves-effect waves-light btn-sm" id="sweet-14">Delete</button></a>

                            <button type="button" class="btn btn-info waves-effect waves-light m-1" data-toggle="modal" data-target="#e1<?php echo $value['A_id'] ?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Edit Front proof</span> </button> 
                            <button type="button" class="btn btn-warning waves-effect waves-light m-1" data-toggle="modal" data-target="#e2<?php echo $value['A_id'] ?>"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Edit Back proof</span> </button>
                          </td>
                        </tr>
                        <?php 
                          } 
                          ?>
                      </tbody>
                      <tfoot>
                      </tfoot>
                    </table>
                    <?php foreach ($data as $row) {
                      ?>
                    <!-- The Modal -->
                    <div class="modal fade" id="a<?php echo $row['A_id'] ?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Profile</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form id="signupForm" action="php/admin_update?id=<?php echo($row['A_id']); ?>" method="post" >
                            <!-- Modal body -->
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="input-10" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" id="input-10" name="A_name" value="<?php echo $row['A_name'] ?>">
                                </div>
                              </div>
                              <h4 class="form-header text-uppercase">
                                <i class="fa fa-envelope-o"></i>
                                Contact Info & Bio
                              </h4>
                              <div class="form-group row">
                                <label for="input-14" class="col-sm-2 col-form-label">E-mail</label>
                                <div class="col-sm-8">
                                  <input type="email" class="form-control" id="input-14" name="A_email" value="<?php echo $row['A_email'] ?>" >
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="input-17" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-8">
                                  <textarea name="A_address" class="form-control" rows="2" id="input-17" ><?php echo $row['A_address'] ?></textarea>
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="input-14" class="col-sm-2 col-form-label">Contact Number</label>
                                <div class="col-sm-8">
                                  <input type="text" pattern="[0-9]{10}" title="only 10 digit allowed" class="form-control" id="input-14" name="A_mono" value="<?php echo $row['A_mono'] ?>"required>
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
                    <!-- The Modal  for edit front proof-->
                    <div class="modal fade" id="e1<?php echo $row['A_id'] ?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Edit Front proof</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form id="signupForm" action="php/front_proof_update?id=<?php echo($row['A_id']); ?>" method="post" enctype="multipart/form-data">
                            <!-- Modal body -->
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="input-10" class="col-sm-2 col-form-label">New image</label>
                                <div class="col-sm-8">
                                  <input type="file" class="form-control" id="input-10" name="A_front_proof">
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
                    <!-- The Modal  for edit front proof-->
                    <div class="modal fade" id="e2<?php echo $row['A_id'] ?>">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <!-- Modal Header -->
                          <div class="modal-header">
                            <h4 class="modal-title">Edit back proof</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                          </div>
                          <form id="signupForm" action="php/back_proof_update?id=<?php echo($row['A_id']); ?>" method="post" enctype = "multipart/form-data">
                            <!-- Modal body -->
                            <div class="modal-body">
                              <div class="form-group row">
                                <label for="input-10" class="col-sm-2 col-form-label">new image</label>
                                <div class="col-sm-8">
                                  <input type="file" class="form-control" id="input-10" name="A_back_proof">
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
                    <?php
                      } ?>
                  </div>
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
    <!--Sweet Alerts -->
    <script src="assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
    <script src="assets/plugins/alerts-boxes/js/sweet-alert-script.js"></script>
  </body>
</html>