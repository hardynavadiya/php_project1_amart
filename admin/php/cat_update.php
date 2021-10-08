<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "category_master";

		$s_redirect = "../view_category";
		$f_redirect = "../view_category";

		$s_msg = "successfully category updated";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`Cat_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}
		$set = rtrim($set,", ");

		include "maincode/update.php";
	}
?>