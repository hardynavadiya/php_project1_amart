<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user";

		$f_no_redirect = "index";
		$f_redirect = "dashboard";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";

		include "maincode/select.php";
		$view_user = $data;
		unset($data);
	}
?>