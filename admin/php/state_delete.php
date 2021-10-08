<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "states";
		
		$s_redirect = "../view_state";
		$f_redirect = "../view_state";

		$s_msg = "succesfully delete data";
		$f_msg = "please contact devloaper";
		// $f_msg = mysqli_error($conn);

		$id = $_GET['id'];
		$where = "`State_id` = '$id'";

		include "maincode/delete.php";
	}
?>