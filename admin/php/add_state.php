<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		// if($_POST["State_name"] == "")
		// {
		// 	echo "<script>
		// 	alert('Please Fill the State Detail');
		// 	window.location.href='../state';
		// 	</script>";
		// }
		$tablename = "states";

		$s_redirect = "../view_state";
		$f_redirect = "../add_state";

		$s_msg = "Admin New State Add";
		$f_msg = "please contact devloper";

		extract($_POST);
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}
?>