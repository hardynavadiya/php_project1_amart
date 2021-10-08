<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		// if($_POST["State_id"] == "" || $_POST["City_name"] == "")
		// {
		// 	echo "<script>
		// 	alert('Please Fill the all Detail');
		// 	window.location.href='../city';
		// 	</script>";
		// }
		$tablename = "cities";

		$s_redirect = "../view_city";
		$f_redirect = "../add_city";

		$s_msg = "Admin New City Add";
		$f_msg = "please contact devloper";

		extract($_POST);		
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}
?>