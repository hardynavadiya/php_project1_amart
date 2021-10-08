<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$from = $_POST['from'];
		$to = $_POST['to'];

		$tablename = "company";

		$f_no_redirect = "../report_company";
		$f_redirect = "../report_company";

		$s_msg = "";
		$no_data = "you have no data";
		$f_msg = "failed,";

		$select = "*";
		$join = "`states` ON $tablename.`C_state` = `states`.`State_id`";
		$join .= "JOIN `cities` ON $tablename.`C_city` = `cities`.`City_id`";
		$join .= "JOIN `user` ON $tablename.`U_id` = `user`.`U_id`";
		
		include "maincode/join.php";
		$com = $data;
		unset($data);
	}
?>