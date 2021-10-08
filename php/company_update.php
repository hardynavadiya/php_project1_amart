<?php
	include "maincode/config.php";

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "company";

		$s_redirect = "../company";
		$f_redirect = "../edit_company";

		$s_msg = "successfully company updated";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`C_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}

		$set = rtrim($set,", ");
	
		include "maincode/update.php";
	}
?>