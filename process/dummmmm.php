<!DOCTYPE html>
<html>
<head>
	<title>user_account</title>
</head>
<body>
	<?php include('include/header.php') ?>
</body>
</html>

<?php if ($promo_discount) { ?>

$(document).on('click','#make-payment',function (){
		window.location.href = "<?php echo $SITE_URL; ?>confirm-order/";
	})


	$j = 1;
for($i=0;$i<count($_POST['ids']);$i++) {

	$q = "UPDATE $table_name SET setord = $j WHERE id = ".$_POST['ids'][$i]." AND user_uid = '".$_SESSION['momenty_uid']."'";
	mysqli_query($db,$q);
	$j++;
}