<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "wishlist";
		
		$s_redirect = "../wishlist";
		$f_redirect = "../wishlist";

		$s_msg = "succesfully wishlist product";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		$where = "`W_id` = '$_POST[W_id]'";

		include "maincode/delete.php";
	}
?>