<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "cities";
	
		$f_no_redirect = "../view_city";
		$f_redirect = "../view_city";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		//$select = "`A_id`, `A_name`";

		include "maincode/select.php";
		$view_city = $data;
		unset($data);
	}
?>