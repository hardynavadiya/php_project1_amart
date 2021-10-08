<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "sub_category";

		$s_redirect = "../view_subcategory";
		$f_redirect = "../view_subcategory";

		$s_msg = "sub-category updated";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`Sub_cat_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}
		$set = rtrim($set,", ");

		include "maincode/update.php";
	}
?>