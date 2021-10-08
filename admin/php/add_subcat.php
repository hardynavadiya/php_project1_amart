<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		// if($_POST["Cat_id"] == "" || $_POST["Sub_cat_name"] == "")
		// {
		// 	echo "<script>
		// 	alert('Please Fill the all Detail');
		// 	window.location.href='../subcategory';
		// 	</script>";
		// }
		$tablename = "sub_category";

		$s_redirect = "../subcategory";
		$f_redirect = "../subcategory";

		$s_msg = "Admin New Subcategory Add";
		$f_msg = "please contact devloaper";

		extract($_POST);
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";
	}
?>