<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if ($_POST['price']) {
			$price = $_POST['price'];
			$price = explode("-", $price);
			$from = trim($price[0]);
			$to = trim($price[1]);
			
			$from = substr($from, 3);
			$to = substr($to, 3);

			$id = $_GET['cat'];
			$id1 = $_GET['sub'];

			$tablename = "product";
		
			$f_no_redirect = "";
			$f_redirect = "";

			$no_data = "you have no data";
			$f_msg = "please contact developer";

			$select = "*";
			$where = "`Cat_id` = '$id' AND `Sub_cat_id` = '$id1' AND `P_status` = '1' AND `P_u_status` = '1' AND `P_price` BETWEEN '$from' AND '$to'";

			include "maincode/select_particular_array.php";
			$product = $data;
			unset($data);
		}
	}
?>