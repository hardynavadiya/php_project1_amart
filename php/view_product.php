<?php
	// include "maincode/session.php";
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$f_no_redirect = "../dashboard";
		$f_redirect = "../view_company";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$join = "`category_master` ON $tablename.`Cat_id` = `category_master`.`Cat_id`";
		$join .= "JOIN `sub_category` ON $tablename.`Sub_cat_id` = `sub_category`.`Sub_cat_id`";
		$join .= "JOIN `company` ON $tablename.`C_id` = `company`.`C_id`";
		$where = "$tablename.`U_id` = $_SESSION[U_id]";

		include "maincode/join_where.php";
		
		$product = $data;
		unset($data);
	}
?>