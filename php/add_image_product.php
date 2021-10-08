<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "product";

		$no_data = "you have no data";
		$s_msg = "Add image successfully";
		$f_msg = "not success";

		$s_redirect = "../product";
		$f_redirect = "../product";

		$id = $_GET['id'];
		$select = "P_image";
		$where = "`P_id` = '$id'";

		include "maincode/select_particular.php";
		
		$img1 = json_decode($row['P_image']);

		$img = "P_image";
		$dir = "../images/product/";

		foreach ($_FILES[$img]["tmp_name"] as $key => $value) {
			include "maincode/multiple_upload_image.php";
		}
		$img1 = array_merge($img1,$image1);

		$img1 = json_encode($img1);
		$set = "`P_image` = '$img1'";

		include "maincode/update.php";
	}
?>