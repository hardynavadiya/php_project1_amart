<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "cities";

		$s_redirect = "../view_city";
		$f_redirect = "../add_city";

		$s_msg = "city is added";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		extract($_POST);
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";	
	}
?>