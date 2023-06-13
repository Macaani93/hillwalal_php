<?php
include('src/header.php');
include('src/conection.php');

?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>List of Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
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
  <button type="button" class="btn btn-default bg-primary" data-toggle="modal" data-target="#chariyal-modal"><i class="fa fa-plus"></i> Add New</button>
                <br>
                <br>
   <table id="example1" class="table table-bordered table-striped">
       <thead>
        <tr>
     <th>#</th>
     <th>Name</th>
     <th>Phone</th>
      <th>UserName</th>
      <th>Passwowrd</th>
      <th>Role</th>
      <th>Action</th>
      </tr>
      </thead>
    <tbody>
    <?php
      $readquery=mysqli_query($conection,'SELECT * FROM `users`');
      if ($readquery){
        foreach($readquery as $row){
      ?>
      <tr>
  <td><?php echo $row['ID']?></td>
  <td><?php echo $row['Name']?></td>
    <td><?php echo $row['Phone']?></td>
    <td><?php echo $row['UserName']?></td>
    <td><?php echo $row['Password']?></td>
    <td><?php echo $row['Role']?></td>
      <td>
       
<form action="users_update.php">
 
    <button type="button"name="update-user"id="update-user" class='btn btn-success btn_edit'><i class="fa fa-edit"></i>Edit</button>
    <button type="button" class='btn btn-danger btn_delete'><i class="fa fa-trash"></i>Delete</button>
    </form>
        </td>
        </tr>
      <?php }}?>
      <tbody>
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
        </div>
    <!-- users insert modal -->
    <div class="modal fade" id="chariyal-modal">
  <div class="modal-dialog">
   <div class="modal-content">
   <div class="modal-header">
   <h4 class="modal-title">Add New User</h4>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
        </button>
    </div>
    <div class="modal-body">
    <form action="insert/Users_insert.php" method="post" enctype="multipart/form-data">
    <div class="fromgroup">
      
   <label for="name">Name</label>
    <input type="text" name="Name" id="Name" "  class="form-control" required>
   <label for="number">Phone</label>
    <input type="text" name="Phone" id="Phone" class="form-control" required>
    <label for="Adress">UserName</label>
    <input type="text" name="UserName" id="UserNmae" class="form-control" required>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control" required>
     <!-- <label for="password">Confirm Password</label>
     <input type="text" name="confirm password" id="confirm password" required class="form-control" > -->
    <label for="Type">Role</label>
                <select type="text" name="Role" id="Role" class="form-control" required>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                </select>
              </div>
            </div>
      <div class="modal-footer ">
      <button type="button" class="btn btn-default bg-success" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary" name="insert_user" id="insert_user">Save</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        </div>

    <!-- end users insert modal -->

<!-- edit or update modal -->
<div class="modal fade" id="edit_modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Update Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               
              </button>
            </div>
            <div class="modal-body">
     <form action="users_update.php" method="post">
              <div class="fromgroup">
                <label for="name">Name</label>
                <input type="text" name="Name" id="Name"value="<?php echo $row['Name']?>" class="form-control" required>
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone"value="<?php echo $row['Phone']?>" class="form-control" required>
                <label for="Adress">UserName</label>
                <input type="text" name="UserName" id="UserNmae" value="<?php echo $row['UserName']?>"class="form-control" required>
                <label for="password">Password</label>
                <input type="text" name="password" id="password" value="<?php echo $row['Password']?>"class="form-control" required>
                
                <label for="Type">Role</label>
                <select type="text" name="Role" id="Role" class="form-control" required>
                  <option value="Admin">Admin</option>
                  <option value="User">User</option>
                </select>
              </div>
             
            </div>
            <div class="modal-footer ">
             
              <button type="button" class="btn btn-default bg-success" data-dismiss="modal">Close</button>
              <button type="submit" name="update_user" id="update_user" class="btn btn-dark">Update</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
</div> -->

<!--end edit or update modal -->

<!-- delete modal -->
<div class="modal fade" id="Users_delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Delete_modal</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               
              </button>
            </div>
            <div class="modal-body">
              <form action="delete/users_delete.php" method="post">
             
              <input type="text" name="delateID" id="delateID" class="form-control" readonly>
              <h3>Do you want to delete</h3>
            </div>
            <div class="modal-footer ">
              <button type="button" class="btn btn-default bg-success" data-dismiss="modal">No</button>
              <button type="submit" name="delete" id="delete"class="btn btn-warning">Yes</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        </div>
  
<!--end delete modal -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  </div>
  <!-- Control Sidebar -->

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
 
  <!-- /.control-sidebar -->
</div>

<!-- ./wrapper -->
<!-- jQuery -->

<?php include("src/footer.php");?>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
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

<script>
$(document).ready(function() {
    $('.btn_delete').on('click', function() {
        // alert('Are you sure');
        $('#Users_delete').modal('show');
        $tr = $(this).closest('tr');
        let data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();
        console.log(data[0]);
        $('#delateID').val(data[0]);
    })
    })
$(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": [ "excel", "pdf", "print"]
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
</body>

</html>
<!-- Bootstrap javascript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
<script>


</script>