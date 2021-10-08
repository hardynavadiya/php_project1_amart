<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "order";

		$f_no_redirect = "../index";
		$f_redirect = "";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";	
		$join = "`product` ON `$tablename`.`P_id` = `product`.`P_id`";
		$where = "`$tablename`.`U_id` = $_SESSION[U_id]";

		include "maincode/join_where.php";
		$sell = $data;
		unset($data);
	}
?>