<?php
include('include/config.php');

?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
  <style>
html,
body,
header,
.view {
  height: 100%;
}

  </style>
</head>
<body>
<form action = "" method="POST" style="margin-left: 50px; padding: 50px; transform: translate(20%, 30%);">
 
    <div class="card form-group justify-content-center" style="width:50%; padding:17px;">
      <h1 class="text-center">Admin Login</h1>
      <label>Admin name</label>
      <input type="text" name="admin_name" class="form-control" placeholder="Enter name">  
      <div class="form-group mt-2 ">
        <label>Password</label>
        <input type="password" name="admin_password" class="form-control" placeholder="Password">
      </div>
      <div class="text-center">
        <button type="submit" name="submit" class="btn btn-primary" >Submit</button>
      </div>
    </div>
</form>
<!-- <script type="text/javascript" src="js/jquery.validate.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
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
 
  header('location:product.php');
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