<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$P_image_name = $_POST["P_image_name"];
		// print_r($P_image_name);

		$tablename = "product";

		$no_data = "you have no data";
		$s_msg = "edit image successfully";
		$f_msg = "not success";

		$s_redirect = "../product";
		$f_redirect = "../product";

		$id = $_GET['id'];
		$select = "P_image";
		$where = "`P_id` = '$id'";

		include "maincode/select_particular.php";
		
		$img1 = json_decode($row['P_image']);
		// unlink means delete the img1
		unlink("../images/product/".$img1[$P_image_name]);

		$img = "P_image";
		$dir = "../images/product/";

		include "maincode/upload_image.php";

		$img1[$P_image_name] = $image;
		$img1 = json_encode($img1);
		$set = "`P_image` = '$img1'";

		include "maincode/update.php";
	}
?>