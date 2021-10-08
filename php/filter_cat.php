<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "category_master";
	
		$f_no_redirect = "";
		$f_redirect = "";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$cat = $_GET['cat'];
		
		$select = "*";	
		$join = "`product` ON `$tablename`.`Cat_id` = `product`.`Cat_id`";
		$where = "$tablename.`Cat_id` = '$cat'";

		include "maincode/join_where.php";
		$filter_cat = $data;
		unset($data);
	}
?>