<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "states";

		$f_no_redirect = "../view_state";
		$f_redirect = "../view_state";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "Country_id = '101'";

		include "maincode/select_particular_array.php";
		$view_state = $data;
		unset($data);
	}
?>