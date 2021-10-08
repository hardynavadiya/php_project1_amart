<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "sub_category";

		$f_no_redirect = "../view_subcategory";
		$f_redirect = "../view_subcategory";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$id = $_GET['id'];

		$where = "`Cat_id` = '$id'";
		$columname = "Sub_cat_id";

		$columname1 = "Sub_cat_name";

		include "maincode/find_subcat.php";
	}
?>