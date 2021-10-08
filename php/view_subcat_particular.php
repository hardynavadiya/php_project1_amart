<?php
	include "maincode/config.php";
	// if($_SERVER["REQUEST_METHOD"]=="GET")
	// {
		$tablename = "sub_category";

		$f_no_redirect = "";
		$f_redirect = "../view_admin";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		//$select = "`id`, `name`";

		$id = $value['Cat_id'];
		$where = "`Cat_id` = $id";
		
		include "maincode/select_particular_array.php";
	// }
?>