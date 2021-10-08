<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user";

		$s_redirect = "../view_user";
		$f_redirect = "../view_user";

		$s_msg = "Admin Accept User Request";
		$f_msg = "please contact devloaper";

		$columname = "U_status";

		$id = $_GET['id'];
		$where = "`U_id` = '$id'";

		include "maincode/changestatus.php";
	}
?>