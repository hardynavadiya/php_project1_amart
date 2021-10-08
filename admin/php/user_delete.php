<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user";
		
		$s_redirect = "../view_user";
		$f_redirect = "../view_user";

		$s_msg = "succesfully delete data";
		$f_msg = "please contact devloaper";

		$id = $_GET['id'];
		$where = "`U_id` = '$id'";

		include "maincode/delete.php";
	}
?>