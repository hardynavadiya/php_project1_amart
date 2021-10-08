<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "company";

		$f_no_redirect = "../dashboard";
		$f_redirect = "../view_company";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "U_id = $_SESSION[U_id]";

		include "maincode/select_particular.php";
		$com = $row;
		unset($row);
	}
?>