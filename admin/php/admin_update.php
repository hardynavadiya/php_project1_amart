<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "admin";

		$s_redirect = "../view_admin";
		$f_redirect = "../upd_profile";

		$s_msg = "Admin Edit Successfully";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`A_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}
		$set = rtrim($set,", ");

		include "maincode/update.php";
	}
?>