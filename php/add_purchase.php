<?php
	session_start();
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "order";

		$s_redirect = "../index";
		$f_redirect = "../checkout";

		$s_msg = "Thank You For Purchasing Product";
		$f_msg = "please contact developer";
		
		$id = $_SESSION['U_id'];	
		$p_id = $_POST['P_id']; 	
		$p_price = $_POST['P_price'];	

		$columname = 'P_id`,`U_id`,`S_price';
		foreach ($p_id as $key => $value) {
			$values = "$value','$id','$p_price[$key]";
			include "maincode/insert.php";
		}	
	}
?>