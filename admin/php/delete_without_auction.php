<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";
		
		$s_redirect = "../view_without_auction";
		$f_redirect = "../view_without_auction";

		$s_msg = "succesfully delete data";
		$f_msg = "please contact devloaper";
		// $f_msg = mysqli_error($conn);

		$id = $_GET['id'];
		$where = "`P_id` = '$id'";

		include "maincode/delete.php";
	}
?>