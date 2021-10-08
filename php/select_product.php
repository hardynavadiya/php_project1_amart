<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$f_no_redirect = "../dashboard";
		$f_redirect = "../view_company";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$id = $_GET['id'];
		$where = "P_id = $id";

		include "maincode/select_particular.php";
		$pro = $row;
		unset($row);
	}
?>