<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "sub_category";
		
		$s_redirect = "../view_subcategory";
		$f_redirect = "../view_subcategory";

		$s_msg = "succesfully delete Subcategory";
		$f_msg = "please contact developer";
		// $f_msg = mysqli_error($conn);

		$id = $_GET['id'];
		
		$where = "`Sub_cat_id` = '$id'";
		include "maincode/delete.php";
	}
?>