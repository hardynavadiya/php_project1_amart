<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user";

		$f_no_redirect = "../dashboard";
		$f_redirect = "../view_user";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		//$select = "`A_id`, `A_name`";

		include "maincode/select.php";
	}
?>