<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "states";

		$s_redirect = "../view_state";
		$f_redirect = "../view_state";

		$s_msg = "Change status successfully";
		$f_msg = "please contact devloper";

		// $f_msg = mysqli_error($conn);

		$columname = "State_status";
		$id = $_GET['id'];
		$where = "`State_id` = '$id'";

		include "maincode/changestatus.php";
	}
?>