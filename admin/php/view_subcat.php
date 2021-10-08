<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "sub_category";

		$f_no_redirect = "subcategory";
		$f_redirect = "subcategory";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";

		include "maincode/select.php";
		$view_subcat = $data;
		unset($data);
	}
?>