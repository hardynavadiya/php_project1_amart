<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if ($_POST["search"]) {

			$search = $_POST["search"];
			$cat = $_POST["category"];

			$tablename = "product";
			$select ="*";

			$s_msg = "";
			$f_msg = "";

			$s_redirect = "";
			$f_redirect = "";

			$where = "`P_name` LIKE '%$search%' AND `Cat_id` = '$cat'";

			include  "maincode/select_particular_array.php";
			$filter_cat = $data;
			unset($row);
		}
	}
?>