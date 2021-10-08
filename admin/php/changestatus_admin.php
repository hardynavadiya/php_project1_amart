<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "admin";

		$s_redirect = "../view_admin";
		$f_redirect = "../view_admin";

		$s_msg = "Admin Status Change Successfully";
		$f_msg = "please contact devloaper";

		$columname = "A_status";

		$id = $_GET['id'];
		$where = "`A_id` = '$id'";

		include "maincode/changestatus.php";
	}
?>