<?php
	include "maincode/config.php";
	
		$tablename = "category_master";

		$f_no_redirect = "index";
		$f_redirect = "admin";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		//$select = "`A_id`, `A_name`";

		include "maincode/select.php";
		$view_cat = $data;
		unset($data);
?>