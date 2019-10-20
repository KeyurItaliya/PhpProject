<?php
 include('include/config.php'); 

 if(!$_SESSION['aid'] || $_SESSION['aid'] == ''){
  header("location:admin_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Other Utilities</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    table{
    text-align: center;   
    }
  </style>
</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->

<?php include('include/side_header.php'); ?>
      
<!-- End of Topbar -->

        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product</h1>


<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Product DataTables</h6>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>id</th>
            <th>Category name</th>
            <th>Category images</th>
            <th>Status</th>
        </tr>
        </thead>
        <!-- <tfoot>
          <tr>
            <th>id</th>
            <th>Category_id</th>
            <th>product_name</th>
            <th>Status</th>
          </tr>
        </tfoot> -->
        <tbody>
        <?php 
          $result = "SELECT * FROM `category` WHERE 1";
          $qur = mysqli_query($dbcon,$result);
          while($data = mysqli_fetch_assoc($qur)){
          ?>
          <tr>
            <td><?php echo $data['id']; ?></td>
            <td><?php echo $data['category_name']; ?></td>
            <td><img style="width:80px;" src="catimg/<?php echo $data['category_image']; ?> "></td>
            <td><?php 
              $check = $data['status'];
              if($check == "Y") {
                 echo "Active";
              }else{
                echo "Inactive";
              }
            ?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
      <div style="text-align:center;">
      <button type="button" class="btn " data-toggle="modal" data-target="#exampleModalCenter">
      <a href="#" class="btn btn-success btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-plus"></i>
          </span>
          <span class="text">Add category item</span>
      </a>
      </button>
      </div>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item "><a class="page-link" href="#" tabindex><<</a> </li>
      <li class="page-item "><a class="page-link" href="#" tabindex><</a> </li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#">5</a></li>
      <li class="page-item "><a class="page-link" href="#" tabindex>></a></li>
      <li class="page-item "><a class="page-link" href="#" tabindex>>></a></li>
    </ul>
  </nav>
  
  
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process/category_process.php" enctype="multipart/form-data" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">catagory name</label>
            <input type="text" name="category_name" class="form-control" id="catagory_add_name">
          </div>

          <div class="form-group">
            <label for="formGroupExampleInput">catagory Image</label>
            <input type="file" name="category_image" class="form-control" id="category_image">
          </div>
          
          <div class="form-group">
            <label for="formGroupExampleInput2">Status</label>
            <div>
                <input type="radio" name="status" value = "Y" id="formGroupExampleInput2" checked>Active
                <input type="radio" class="ml-3" name="status" value = "N"  id="formGroupExampleInput2">Inactive
            </div>		
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="submit" class="btn btn-primary">submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
