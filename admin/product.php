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

  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
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
    <?php include('include/side_header.php'); ?>
  <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Product</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Product DataTables</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th>Product category id</th>
                <th>Product name</th>
                <th>Product price</th>
                <th>Product image</th>
                <th>Status</th>
                <th>Operation</th>
              </tr>
            </thead>
            <tbody>
            <?php 
            //  $result = "SELECT p.*, r.product_other_image FROM product p INNER JOIN product_images r ON p.id = r.product_id";
            //  $result = "SELECT p.*, r.* FROM product p, product_images r WHERE p.id = r.product_id";
              $result = "SELECT * FROM `product` WHERE 1";
              $qur = mysqli_query($dbcon,$result);
              while($data = mysqli_fetch_assoc($qur)){
              ?>
              <tr>
                <td><?php echo $data['category_id']; ?></td>
                <td><?php echo $data['product_name']; ?></td>
                <td><?php echo $data['product_price']; ?></td>
                <td>
                <img style="width:50px;height:50px;" src="<?php echo 'img/'.$data['product_image'];?>"> 
                  <?php 
                  $data_id = $data['id'];
                  $query = "SELECT * FROM `product_images` WHERE `product_id` = '".$data_id."'";
                  $run = mysqli_query($dbcon, $query);
                  while($im = mysqli_fetch_assoc($run)){
                  ?>
                  <img style="width:50px;height:50px;" src="<?php echo 'other_image/'.$im['product_other_image'];?>"> 
                  <?php 
                    }
                  ?>
                </td>
                <td><?php
                $check = $data['status'];
                if($check == "Y") {
                  echo "Active";
                }else{
                  echo "Inactive";
                }
                  ?></td>
                <td>  
                  <button data-placement="top" title="Edit" data-toggle="modal" data-target="#mysignupModal">
                  <a class="product_update_id"  data-id="<?php echo $data['id'];?>"> <i class="fas fa-pen-alt"></i></a></button>         
                  <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <a href="process/product_delete.php?id=<?php echo $data['id']; ?>"><i class="far fa-trash-alt"></i></a>
                  </button>
                  <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                      <a href="product_detail.php?id=<?php echo $data['id']; ?>"><i class="fas fa-eye"></i></a>
                  </button>
                </td>
              </tr>
              <?php 
              }
              ?>
              
            </tbody>
            
          </table>
          <div class="col-xs-8 center-block" style="text-align:center;">
          <button type="button" class="btn " data-toggle="modal" data-target="#exampleModalCenter">
                <a href="#" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                    <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Add item</span>
                </a>
            </button>
            </div>
        </div>
      </div>
    </div>  
</div>
<?php

if (isset($_GET['pageno'])) {
    $pageno = $_GET['pageno'];
  } else {
      $pageno = 1;
  }
$no_of_records_per_page = 5;
$offset = ($pageno-1) * $no_of_records_per_page;


$total_pages_sql = "SELECT COUNT(*) FROM `product`";
$result = mysqli_query($dbcon,$total_pages_sql);
$total_rows = mysqli_fetch_array($result)[0];
$total_pages = ceil($total_rows / $no_of_records_per_page);

$sql = "SELECT * FROM `product` LIMIT $offset, $no_of_records_per_page";
$res_data = mysqli_query($dbcon, $sql);
  while($row = mysqli_fetch_array($res_data)){
    print_r($row);
  }
?>


</div>
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
      <li class="page-item "><a class="page-link" href="#" tabindex><<</a> </li>
      <li class="page-item "><a class="page-link" href="#" tabindex><</a> </li>
      <li class="page-item active"><a class="page-link" href="?pagino=1">1</a></li>
      <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="#">2</a></li>
      <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="#">3</a></li>
      <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="#">4</a></li>
      <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="#">5</a></li>
      <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="#" tabindex>></a></li>
      <li class="page-item <?php if($pageno <= 1){ echo 'disabled'; } ?>"><a class="page-link" href="?pageno=<?php echo $total_pages; ?>" tabindex>>></a></li>
    </ul>
  </nav>     
      <!-- End of Main Content Add product model -->

     

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
        <form action="process/product_add_process.php" enctype="multipart/form-data" method="POST">
          <div class="form-group">
            <label for="formGroupExampleInput">Product name</label>
            <input type="text" name="product_name" class="form-control" id="formGroupExampleInput">
          </div>
          
          <div class="form-group ">
              <label for="inlineFormCustomSelectPref">Category</label>
              <select class="time" id="inlineFormCustomSelectPref" name='time'>
                  <option selected>Choose...</option>
                  <?php
                      $result = "SELECT * FROM `category` WHERE 1";
                      $qur = mysqli_query($dbcon,$result);
                      while($data = mysqli_fetch_assoc($qur)){
                        $row = $data['category_name'];
                        $category_id = $data['id'];
                  ?>
                  <option value="<?php echo $category_id; ?>">
                      <?php  echo $row;  ?>
                  </option>
                <?php 
                  }
                  ?>
              </select>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Product price</label>
            <input type="text" name="product_price" id="product_price" class="form-control" id="formGroupExampleInput2">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Main image</label>
            <input type="file" name="imageupload" id="imageupload" class="form-control border-0" >
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">other image</label>
            <input type="file" multiple name="other_imageupload[]" id="other_imageupload" class="form-control border-0" >
          </div>
          <div class="form-group">
            <label>Status</label>
              <div>
                <input type="radio" name="status" value = "Y" id="formGroupExampleInput2" checked>Active
                <input type="radio" class="ml-3" name="status" value = "N"  id="formGroupExampleInput2">Inactive
              </div>
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

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
    </div>
  </div>
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
