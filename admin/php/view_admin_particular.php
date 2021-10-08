<?php
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "admin";

		$f_no_redirect = "dashboard";
		$f_redirect = "dashboard";

		$no_data = "";
		$f_msg = "";

		$select = "*";
		$where = "`A_id` = '$_SESSION[A_ID]'";

		include "maincode/select_particular.php";
		$admin = $row;
		unset($row);
	}
?>