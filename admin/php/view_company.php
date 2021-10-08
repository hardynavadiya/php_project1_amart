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
		$join .= "JOIN `user` ON $tablename.`U_id` = `user`.`U_id`";
		
		include "maincode/join.php";
	}
?>