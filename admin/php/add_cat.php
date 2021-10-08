<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "category_master";

		$s_redirect = "../view_category";
		$f_redirect = "../add_cat";

		$s_msg = "Admin New Category Add";
		$f_msg = "please contact devloaper";

		extract($_POST);
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}
?>