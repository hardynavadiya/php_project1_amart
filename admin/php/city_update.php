<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "cities";
	
		$s_redirect = "../view_city";
		$f_redirect = "../view_city";

		$s_msg = "successfully city updated";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`City_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}
		$set = rtrim($set,", ");

		include "maincode/update.php";
	}
?>