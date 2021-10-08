<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "cart";
		
		$s_redirect = "../view_cart";
		$f_redirect = "../view_cart";

		$s_msg = "succesfully delete cart product";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		$where = "`Cart_id` = '$_POST[Cart_id]'";

		include "maincode/delete.php";
	}
?>