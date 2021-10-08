<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "category_master";
		
		$s_redirect = "../view_category";
		$f_redirect = "../view_category";

		$s_msg = "succesfully delete category";
		$f_msg = "please contact devloaper";

		$id = $_GET['id'];
		
		$where = "`Cat_id` = '$id'";
		include "maincode/delete.php";
	}
?>