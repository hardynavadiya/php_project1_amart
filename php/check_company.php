<?php
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "company";

		$f_no_redirect = "add_company";
		$f_redirect = "add_product";

		$no_data = "Please add company";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "`U_id` = '$_SESSION[U_id]'";

		include "maincode/select_particular.php";
	}
?>