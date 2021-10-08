<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "company";
		
		$s_redirect = "../company";
		$f_redirect = "../company";

		$s_msg = "Company Delete Sucessfully";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		$id = $_GET['id'];
		$where = "`C_id` = '$id'";

		include "maincode/delete.php";
	}
?>