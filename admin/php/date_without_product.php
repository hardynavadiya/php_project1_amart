<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$from = $_POST['from'];
		$to = $_POST['to'];

		$tablename = "product";

		$f_no_redirect = "../report_without_auction";
		$f_redirect = "../report_without_auction";

		$s_msg = "";
		$no_data = "you have no nodata";
		$f_msg = "failed";

		$select = "*";
		$join = "`category_master` ON $tablename.`Cat_id` = `category_master`.`Cat_id`";
		$join .= "JOIN `sub_category` ON $tablename.`Sub_cat_id` = `sub_category`.`Sub_cat_id`";
		$join .= "JOIN `company` ON $tablename.`C_id` = `company`.`C_id`";
		$join .= "JOIN `user` ON $tablename.`U_id` = `user`.`U_id`";
		$where = "`P_type` = 1";
		
		include "maincode/join_where.php";
		$wo_auction = $data;
		unset($data);
	}
?>