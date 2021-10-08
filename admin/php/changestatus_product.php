<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$s_redirect = "../view_without_auction";
		$f_redirect = "../view_without_auction";

		$s_msg = "Admin Accept Without Auction Product Request";
		$f_msg = "please contact devloper";

		// $f_msg = mysqli_error($conn);
		$columname = "P_status";
		$id = $_GET['id'];
		$where = "`P_id` = '$id'";
		
		include "maincode/changestatus.php";
	}
?>