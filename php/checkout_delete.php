<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "order";
		
		$s_redirect = "../checkout";
		$f_redirect = "../checkout";

		$s_msg = "succesfully wishlist product";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		$where = "`S_id` = '$_POST[S_id]'";

		include "maincode/delete.php";
	}
?>