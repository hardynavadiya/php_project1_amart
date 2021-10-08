<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$f_no_redirect = "../view_with_auction";
		$f_redirect = "../view_with_auction";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$join = "`category_master` ON $tablename.`Cat_id` = `category_master`.`Cat_id`";
		$join .= "JOIN `sub_category` ON $tablename.`Sub_cat_id` = `sub_category`.`Sub_cat_id`";
		$join .= "JOIN `company` ON $tablename.`C_id` = `company`.`C_id`";
		$join .= "JOIN `user` ON $tablename.`U_id` = `user`.`U_id`";
		$where = "`P_type`=1";

		include "maincode/join_where.php";
	}
?>