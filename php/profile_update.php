<?php
	include "maincode/config.php";
	include "maincode/session.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "user";

		$s_redirect = "../profile";
		$f_redirect = "../edit_profile";

		$s_msg = "Your profile edit succesfully";
		$f_msg = "please contact developer";

		// $id = $_GET['id'];
		$where ="`U_id` = $_SESSION[U_id]";
		$set = "";

		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}
		$set = rtrim($set,", ");

		include "maincode/update.php";
	}
?>