<?php
	include "maincode/session.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "wishlist";

		$s_redirect = "../wishlist.php";
		$f_redirect = "../show_product";

		$s_msg = "your product is successfully add in wishlist";
		$f_msg = "please contact devloper";

		$_POST['U_id'] = $_SESSION['U_id'];	

		extract($_POST);
		$keys = array_keys($_POST);
		$columname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		$select  = "*";
		$where = "`P_id` = '$_POST[P_id]' AND `U_id` = '$_SESSION[U_id]'";
		include "maincode/select_particular.php";
		if($row){
		}
		else
		{
			include "maincode/insert.php";
		}
	}
?>