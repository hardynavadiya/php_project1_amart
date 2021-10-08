<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		// $f_no_redirect = "../product";
		$f_redirect = "../product";

		// $no_data = "you have no data";
		$f_msg = "please contact developer";

		$id = $_GET['id'];

		$select = "*";
		$where = "`P_id` = '$id' AND `P_status` = '1' AND `P_u_status` = '1'";

		include "maincode/select_particular.php";
		$product = $row;
		unset($row);
	}
?> 
