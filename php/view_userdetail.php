<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user_details";

		$f_no_redirect = "../index";
		$f_redirect = "address";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "U_id = $_SESSION[U_id]";

		include "maincode/select_particular.php";
		
		$ud = $row;
		unset($row);
	}
?>