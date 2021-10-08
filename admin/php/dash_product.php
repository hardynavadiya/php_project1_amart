<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$f_no_redirect = "index";
		$f_redirect = "dashboard";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "`P_type` = 0";
		include "maincode/select_particular_array.php";
		$view_product = $data;
		unset($data);
	}
?>