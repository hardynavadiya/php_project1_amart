<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$s_redirect = "../product";
		$f_redirect = "../product";

		$s_msg = "Change status successfully";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		$columname = "P_u_status";
		$id = $_GET['id'];
		$where = "`P_id` = '$id'";

		include "maincode/changestatus.php";
	}
?>