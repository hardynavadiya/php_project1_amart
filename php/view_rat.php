<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "rating";

		$f_no_redirect = "../index";
		$f_redirect = "";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$join = "`user` ON $tablename.`U_id` = `user`.`U_id`";
		$where = "$tablename.`P_id` = '$_GET[id]'";


		include "maincode/join_where.php";
		$rat = $data;
		unset($data);
	}
?>