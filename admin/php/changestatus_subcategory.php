<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "sub_category";

		$s_redirect = "../view_subcategory";
		$f_redirect = "../view_subcategory";

		$s_msg = "Change status successfully";
		$f_msg = "please contact devloaper";
		// $f_msg = mysqli_error($conn);

		$columname = "Sub_cat_status";
		$id = $_GET['id'];

		$where = "`Sub_cat_id` = '$id'";
		
		include "maincode/changestatus.php";		
	}
?>