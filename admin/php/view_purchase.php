<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "order";

		$f_no_redirect = "../dashboard";
		$f_redirect = "";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";	
		$join = "`product` ON `$tablename`.`P_id` = `product`.`P_id`";
		$join .="JOIN `user` ON `$tablename`.`U_id` = `user`.`U_id`";

		include "maincode/join.php";	
	}
?>