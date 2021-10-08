<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "states";

		$f_no_redirect = "../dashboard";
		$f_redirect = "../view_state";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		//$select = "`A_id`, `A_name`";

		include "maincode/select.php";
		$view_state = $data;
		unset($data);

	}

?>