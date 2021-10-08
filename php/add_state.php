<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "states";

		$s_redirect = "../view_state";
		$f_redirect = "../add_state";

		$s_msg = "state is added";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

		extract($_POST);
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}
?>