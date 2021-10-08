<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$from = $_POST['from'];
		$to = $_POST['to'];

		$tablename = "user";

		$f_no_redirect = "../report_user";
		$f_redirect = "../report_user";

		$s_msg = "";
		$no_data = "you have no nodata";
		$f_msg = "failed,";

		$select = "*";
		$where = "`U_created` BETWEEN '$from' AND '$to'";

		include "maincode/select_particular_array.php";
		$user = $data;
		unset($data);
	}
?>