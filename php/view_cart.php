<?php
	session_start();
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename1 = "product";
		$tablename2 = "cart";
		
		$f_no_redirect = "";
		$f_redirect = "";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$on = "$tablename1.`P_id` = $tablename2.`P_id`";
		$where = "$tablename2.`U_id` = $_SESSION[U_id] ";

		include "maincode/join1.php";
		
		$cart =$data;
		unset($data);

	}
?>