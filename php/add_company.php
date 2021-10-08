<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "company";

		$s_redirect = "../company";
		$f_redirect = "../add_company";

		$s_msg = "Your Company Add successfully";
		$f_msg = "company is not added";

		$_POST['U_id'] = $_SESSION['U_id'];

		$keys = array_keys($_POST);
		$columname = implode("`,`", $keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}  
?>