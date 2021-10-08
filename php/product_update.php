<?php
	include "maincode/config.php";

	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "product";

		$s_redirect = "../product";
		$f_redirect = "../edit_product";

		$s_msg = "Your Product Edit Sucessfully";
		$f_msg = "please contact developer";

		$id = $_GET['id'];
		$where = "`P_id` = '$id' ";

		$set = "";
		$_POST['P_detail'] = json_encode($_POST['P_detail']);
		$_POST['P_detail1'] = json_encode($_POST['P_detail1']);


		foreach ($_POST as $key => $value) {
			$set .= "`".$key."` = '".$value."', ";
		}

		$set = rtrim($set,", ");
	
		include "maincode/update.php";
	}
?>