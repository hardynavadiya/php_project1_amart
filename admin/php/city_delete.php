<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "cities";
		
		$s_redirect = "../view_city";
		$f_redirect = "../view_city";

		$s_msg = "succesfully delete data";
		$f_msg = "please contact devloaper";
		// $f_msg = mysqli_error($conn);

		$id = $_GET['id'];
		$where = "`City_id` = '$id'";

		include "maincode/delete.php";
	}
?>