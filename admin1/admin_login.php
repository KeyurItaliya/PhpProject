<?php
include('../include/dbcon.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
<form action = "" method="POST" style="margin-left: 200px; padding: 350px;">
  <div class="form-group col-lg-6">
    <h1>Admin Login</h1>
    <label for="exampleInputEmail1">admin name</label>
    <input type="text" name="admin_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-lg-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="admin_password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <!--  <input type="hidden" name="id"> -->
 <!--  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
            
<!-- <script type="text/javascript" src="js/jquery.validate.min.js"></script> -->
</body>
</html>

<?php 
if (isset($_POST['submit'])) {

$uname = $_POST['admin_name'];
$upass = $_POST['admin_password'];

$qur = "SELECT * FROM `admin_login` WHERE  `admin_name` = '$uname' AND `admin_password` = '$upass'";

$run = mysqli_query($dbcon,$qur);
$result = mysqli_num_rows($run);
 

if($result==1){
  $data = mysqli_fetch_assoc($run);
  $id = $data['id'];
  session_start();
 $_SESSION['aid'] = $id;
 
  header('location:index.php');
}
else{
  ?>
  <script>
    alert('you are not login');
    // window.open('admin_login.php','_self');
  </script>
<?php
}


}
 ?>