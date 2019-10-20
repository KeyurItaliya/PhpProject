<?php
include('include/dbcon.php');
session_destroy();
header("location:index.php");
?>