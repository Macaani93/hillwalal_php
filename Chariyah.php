<?php
include('src/header.php');
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Chariyah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Chariyah</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        
          <div class="col-12">
            <div class="card">
             
              <!-- /.card-header -->
              <div class="card-body">
               
              <button type="button" class="btn btn-default bg-primary" data-toggle="modal" data-target="#chariyal-modal">
                <i class="fa fa-plus"></i> Add New
                </button>
                <br>
                <br>
               
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Type</th>
                    <th>DonateDate</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>1</td>
                    <td>maccani</td>
                    <td>madino
                    </td>
                    <td>76453826</td>
                    <td>Dugsi</td>
                    <td> 23/4/2023</td>
                    <td>$100</td>
                    <td> pending</td>
                    <td>
                      <button class='btn btn-success'><i class="fa fa-edit"></i>Edit</button>
                      <button class='btn btn-danger'><i class="fa fa-trash"></i>Delete</button>
                    </td>
                  </tr>
                 
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <div class="modal fade" id="chariyal-modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Insert Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               
              </button>
            </div>
            <div class="modal-body">
              <form action="insert/chariyah-insert.php" method="post">

              <div class="fromgroup">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="Adress">Adress</label>
                <input type="text" name="Address" id="Address" class="form-control">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control">
                <label for="Type">Type</label>
                <input type="text" name="Type" id="Type" class="form-control">
                <label for="Type">DonateDate</label>
                <input type="text" name="DonateDate" id="DonateDate" class="form-control">
                <label for="Type">Amount</label>
                <input type="text" name="Amount" id="Amount" class="form-control">
              </div>
            </div>
            <div class="modal-footer ">
              <button type="button" class="btn btn-default bg-danger" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
       
        <!-- /.modal-dialog -->
      </div>
       
        <!-- /.modal-dialog -->
      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<?php
 include('src/footer.php');
 ?>
</body>
</html>
