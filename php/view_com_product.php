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
		$where = "U_id = $_SESSION[U_id] AND C_status = 1 AND C_u_status = 1";

		include "maincode/select_particular_array.php";
		$com = $data;
		unset($data);

	}

?>