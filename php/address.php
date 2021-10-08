<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "user_details";

		$s_redirect = "../index";
		$f_redirect = "../";

		$s_msg = "Your address add successfully";
		$f_msg = "";

		$_POST['U_id'] = $_SESSION['U_id'];

		$keys = array_keys($_POST);
		$columname = implode("`,`", $keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}  
?>