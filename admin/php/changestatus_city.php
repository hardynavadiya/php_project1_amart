<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "cities";

		$s_redirect = "../view_city";
		$f_redirect = "../view_city";

		$s_msg = "Change status successfully";
		$f_msg = "please contact devloper";

		// $f_msg = mysqli_error($conn);

		$columname = "City_status";

		$id = $_GET['id'];
		$where = "`City_id` = '$id'";

		include "maincode/changestatus.php";
	}
?>