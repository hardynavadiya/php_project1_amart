<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "user";

		$s_redirect = "../login";
		$f_redirect = "my-account";

		$s_msg = "Welcome To Our Website";
		$f_msg = "Custumer care";

		//extract($_POST);
		$_POST['U_password'] = md5($_POST['U_password']);
		$keys = array_keys($_POST);
		$columname = implode("`,`", $keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}  
?>