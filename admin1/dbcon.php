<?php
session_start();
$dbcon = mysqli_connect("localhost","root","","cozastore");
if($dbcon == false){
	echo "connection fail";
}

?>