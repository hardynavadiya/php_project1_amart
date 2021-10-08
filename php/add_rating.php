<?php
	include "maincode/session.php";
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "rating";

		$s_redirect = "../buying_order";
		$f_redirect = "../add_review";

		$s_msg = "Your Rating is added";
		$f_msg = "please contact devloper";
		// $f_msg = mysqli_error($conn);

	 	$_POST['U_id'] = $_SESSION['U_id'];
	 	$P_id = $_POST['P_id'];
	 	
		$keys = array_keys($_POST);
		$columname = implode("`,`",$keys);
		$values = implode("','", $_POST);

		include "maincode/insert.php";	
		echo "<pre>";
		print_r($sql);
		exit;
	}
?>