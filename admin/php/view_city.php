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
		$where = "State_id = '12'";

		include "maincode/select_particular_array.php";
		$view_city = $data;
		unset($data);
	}
?>