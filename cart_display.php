<?php
include('../include/dbcon.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>my cart</title>
</head>
<body>
	<?php
	echo "all cart item " .sizeof($_SESSION['cart']);
	 ?>
</body>
</html>