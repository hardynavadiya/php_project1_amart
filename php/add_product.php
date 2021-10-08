<?php
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "product";

		$s_redirect = "../product";
		$f_redirect = "../add_product";

		$s_msg = "Your Product added Sucessfully";
		$f_msg = "product is not added";

		extract($_POST);

		$_POST['U_id'] = $_SESSION['U_id'];
		$_POST['P_detail'] = json_encode($_POST['P_detail']);
		$_POST['P_detail1'] = json_encode($_POST['P_detail1']);

		$keys = array_keys($_POST);
		$columnname = implode("`,`", $keys);
		$values = implode("','", $_POST);

		$img = "P_image";
		$dir = "../images/product/";
		foreach ($_FILES[$img]["tmp_name"] as $key => $value) {
			include "maincode/multiple_upload_image.php";
		}
		$columnname .= "`,`$img";
		$image1 = json_encode($image1);
		$values .= "','$image1";
		include "maincode/insertwithimage.php";
	}  
?>