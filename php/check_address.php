<?php
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user_details";

		$f_no_redirect = "address";
		$f_redirect = "address";

		$no_data = "Please add address";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "`U_id` = '$_SESSION[U_id]'";

		include "maincode/select_particular.php";
	}
?>