<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "product";
		$cat = $_POST['Cat_id'];
		$subcat = $_POST['Sub_cat_id'];

		$f_no_redirect = "admin";
		$f_redirect = "admin";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$join = "`category_master` ON $tablename.`Cat_id` = `category_master`.`Cat_id`";
		$join .= "JOIN `sub_category` ON $tablename.`Sub_cat_id` = `sub_category`.`Sub_cat_id`";
		$join .= "JOIN `company` ON $tablename.`C_id` = `company`.`C_id`";
		$join .= "JOIN `user` ON $tablename.`U_id` = `user`.`U_id`";
		$where = "$tablename.`Cat_id` = '$cat' AND $tablename.`Sub_cat_id` = '$subcat'";

		include "maincode/join_where.php";
		if ($cat) {
			$auction = $data;
			unset($data);
		}
	}
?>