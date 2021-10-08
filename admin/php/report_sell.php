<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$from = $_POST['from'];
		$to = $_POST['to'];

		$tablename = "order";

		$f_no_redirect = "../report_sell";
		$f_redirect = "../report_sell";

		$s_msg = "";
		$no_data = "you have no data";
		$f_msg = "failed,";

		$select = "*";
		$join = "`product` ON `$tablename`.`P_id` = `product`.`P_id`";
		$join .= "JOIN `user` ON `$tablename`.`U_id` = `user`.`U_id`";
		$where = "`S_created` BETWEEN '$from' AND '$to'";

		include "maincode/join_where.php";
		$sell = $data;
		unset($data);
	}
?>