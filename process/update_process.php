<?php


if (!isset($_SESSION['name']) && $_SESSION['name'] == '') {
        header("location:../login.php");
    }

 ?>