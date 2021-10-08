<?php
	include "maincode/config.php";

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "user_details";

		$s_redirect = "../view_address";
		$f_redirect = "../view_address";

		$s_msg = "successfully address updated";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`U_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}

		$set = rtrim($set,", ");
	
		include "maincode/update.php";
	}
?>