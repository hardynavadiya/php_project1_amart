<?php
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		extract($_POST);
		$tablename = "user";

		$f_no_redirect = "../login";
		$s_redirect = "../index";

		$no_data = "your Registration Request is not Accepted...Please Wait";
		$no_p_data = "password is wrong";

		$f_msg = "please contact developer";
		$s_msg = "Welcome To Our Website";

		// $select = "*";
		$select = "`U_id`";

		include "maincode/login.php";
	}
?>