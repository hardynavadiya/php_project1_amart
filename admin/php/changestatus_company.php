<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "company";

		$s_redirect = "../view_company";
		$f_redirect = "../view_company";

		$s_msg = "Admin Accept Company Request";
		$f_msg = "please contact devloper";

		// $f_msg = mysqli_error($conn);

		$columname = "C_status";

		$id = $_GET['id'];
		$where = "`C_id` = '$id'";

		include "maincode/changestatus.php";		
	}
?>