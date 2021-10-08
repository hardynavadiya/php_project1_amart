<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "admin";

		$f_no_redirect = "../dashboard";
		$f_redirect = "../view_admin";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		//$select = "`id`, `name`";

		$id = $_GET['id'];
		//print_r($id);
		//$where = "`A_id` = '$_SESSION[a_id]'"
		$where = "`A_id` = '$id'";
		
		include "maincode/select_particular.php";
	}
?>