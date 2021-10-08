<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "admin";

		$s_redirect = "../view_admin";
		$f_redirect = "../add_admin";

		$s_msg = "New Admin Created Successfully";
		$f_msg = "please contact developer";

		$_POST['A_password'] = md5($_POST['A_password']);

		$keys = array_keys($_POST);
		$columnname = implode("`,`", $keys);
		$values = implode("','", $_POST);

		$dir = "../assets/images/proof/front proof/";
		$img = "A_front_proof";
		include "maincode/uploadimage.php";
	
		$columnname .= "`,`$img";
		$values .= "','$image";

		$dir = "../assets/images/proof/back proof/";
		$img = "A_back_proof";
		include "maincode/uploadimage.php";

		$columnname .= "`,`$img";
		$values .= "','$image";
		
		include "maincode/insert.php";
	}
?>

