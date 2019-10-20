 <?php 
include('../include/dbcon.php');


if (!isset($_SESSION['uid']) && $_SESSION['uid'] == '') {
        header("location:login.php");
    }
  $uid = $_GET['id'];
$qur = "INSERT INTO `users_signup` SET 
		`item_id` = '$uid'
";

$run = mysqli_query($dbcon,$qur);

if($run == true){
	header("location:item_add_cart.php");
}

 ?>