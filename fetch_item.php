<?php 
include('../include/dbcon.php');

$qur = "SELECT * FROM `all_cart_item` ORDER BY id DESC";
$pre = mysqli_qlery($dbcon,$qur);

if($qur > 0){
	$data = mysqli_fetch_assos($pre);

	foreach ($data as $row) {
			$output .= '
			<div> 

			echo '.$row["imag"].';

			</div>
			';
	}
}

?>