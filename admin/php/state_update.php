<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "states";
	
		$s_redirect = "../view_state";
		$f_redirect = "../upd_profile";

		$s_msg = "successfully state updated";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`State_id` = '$id' ";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}

		$set = rtrim($set,", ");

		include "maincode/update.php";
	}
?>