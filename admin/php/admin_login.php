<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		extract($_POST);
		$tablename = "admin";

		$f_no_redirect = "../index";
		$s_redirect = "../dashboard";

		$no_data = "Plaese Fill the correct Detail";
		$no_p_data = "please enter the correct password";

		$f_msg = "please contact developer";
		$s_msg = "login succesfully";

		//$select = "*";
		$select = "`A_id`";

		include "maincode/login.php";
	}
?>