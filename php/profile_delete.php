<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "user";
		
		$s_redirect = "../profile";
		$f_redirect = "../profile";

		$s_msg = "Delete succesfully";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		$columname  = "U_status";

		$id = $_GET['id'];
		$where = "`U_id` = '$id'";

		include "maincode/changestatus.php";
	}
?>