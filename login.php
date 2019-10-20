<?php
include('include/dbcon.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>login</title>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- <img src="images/slide-05.jpg" class="img-fluid" alt="Responsive image"> -->
<form style="margin-left: 200px; padding: 350px;" action = "" method="POST">
  <div class="form-group col-lg-6">
    <h1>User Login</h1>
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="u_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group col-lg-6">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="u_pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 <!--  <input type="hidden" name="id"> -->
 <!--  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button style="margin-left: 150px;" type="submit" name="submit" class="btn btn-primary">Submit</button>
  <a href="Admin-master/admin_login.php">Admin Login</a>
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
            
<!-- <script type="text/javascript" src="js/jquery.validate.min.js"></script> -->
</body>
</html>

<?php 
if (isset($_POST['submit'])) {

$uname = $_POST['u_name'];
$upass = $_POST['u_pass'];

$qur = "SELECT * FROM `users_signup` WHERE  `u_name` = '$uname' AND `u_pass` = '$upass'";

$run = mysqli_query($dbcon,$qur);
$result = mysqli_num_rows($run);
if ($result==1){
 $data = mysqli_fetch_assoc($run);
    $id = $data['id'];
    // session_start();
   $_SESSION['uid'] = $id;
   
   header('location:index.php');
}

else{
 ?>
  <script>
    alert('you are not login');
    window.open('login.php','_self');
  </script>
<?php
}
}
 ?>


