<?php
	include "maincode/session.php";
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "bidding";

		$s_redirect = "../index";
		$f_redirect = "../index";

		$s_msg = "Your Bidding is added";
		$f_msg = "please contact devloper";
		
	 	$_POST['U_id'] = $_SESSION['U_id'];
	 	$P_id = $_POST['P_id'];

		$keys = array_keys($_POST);
		$columname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";	
		
	}
?>