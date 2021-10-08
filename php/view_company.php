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
		$join = "`states` ON $tablename.`C_state` = `states`.`State_id`";
		$join .= "JOIN `cities` ON $tablename.`C_city` = `cities`.`City_id`";
		$where = "$tablename.`U_id` = $_SESSION[U_id]";

		include "maincode/join_where.php";
		$com = $data;
		unset($data);
	}
?>