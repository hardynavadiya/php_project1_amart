<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "category_master";

		$s_redirect = "../view_category";
		$f_redirect = "../view_catgory";

		$s_msg = "Change status successfully";
		$f_msg = "please contact devloaper";

		// $f_msg = mysqli_error($conn);
		$columname = "Cat_status";
		$id = $_GET['id'];
		$where = "`Cat_id` = '$id'";
		
		include "maincode/changestatus.php";
	}
?>