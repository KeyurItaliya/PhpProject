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

  <title>Product Images</title>
  
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
<?php include('include/side_header.php'); ?>
        <!-- End of Topbar -->

        <div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Product Detail</h1>


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
            <th>Product id</th>
            <th>Product image</th>
            <th>Product name</th>
            <th>Operation</th>
          </tr>
        </thead>
        <!-- <tfoot>
          <tr>
          <th>product_category_id</th>
            <th>product_name</th>
            <th>product_price</th>
            <th>Product_image</th>
            <th>Status</th>
          </tr>
        </tfoot> -->
        <tbody>
        <?php 
          $id = $_GET['id'];
          $result = "SELECT * FROM `product_images` WHERE `product_id` = '".$id."'";
          $qur = mysqli_query($dbcon,$result);
          while($data = mysqli_fetch_assoc($qur)){
          ?>
          <tr>
            <td class="ml-5"><?php echo $data['product_id']; ?></td>
            <td><img style="width:50px;height:50px;" src="<?php echo 'other_image/'.$data['product_other_image'];?>"> </td>
            <td><?php echo $data['product_id']; ?></td>
            <td>  
              <button data-placement="top" title="Edit" data-toggle="modal" data-target="#mysignupModal">
               <a class="product_update_id"  data-id="<?php echo $data['id'];?>"> <i class="fas fa-pen-alt"></i></a></button>         
              <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                  <a href="process/product_delete.php?id=<?php echo $data['id']; ?>"><i class="far fa-trash-alt"></i></a>
              </button>
            </td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
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
      <!-- End of Main Content Add product model -->

<!-- Modal -->


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
</div>

<div class="modal fade" id="mysignupModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content ">
      <div id="show_data">
                
      </div>
    </div>
  </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/script.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
