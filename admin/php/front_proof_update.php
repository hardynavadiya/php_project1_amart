<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "admin";

		$s_redirect = "../view_admin";
		$f_redirect = "../view_admin";

		$s_msg = "successfully front proof updated";
		$f_msg = "please contact devloper";

		$dir = "../assets/images/proof/front proof/";
		$img = "A_front_proof";
		include "maincode/uploadimage.php";

		$id = $_GET['id'];
		$where = "`A_id` = '$id'";
		$set = "`$img` = '$image'";

		$select = "$img";
		include "maincode/select_particular.php";
		unlink($dir.$row[$img]);
		
		include "maincode/update.php";
	}
?>