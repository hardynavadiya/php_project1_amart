<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "product";

		$f_no_redirect = "../dashboard";
		$f_redirect = "";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		 $select = "*";	
		// $join = "`bidding` ON `$tablename`.`P_id` = `bidding`.`P_id`";
		 $where = "`P_type` = 0 ";

		include "maincode/select_particular_array.php";	
		$bidding = $data;
		unset($data);

		foreach ($bidding as $key => $value) {
			$tablename = "bidding";
			$select = "*";	
			$join = "`product` ON `$tablename`.`P_id` = `product`.`P_id`";
			$join .= "JOIN `user` ON $tablename.`U_id` = `user`.`U_id`";
			$where = "`bidding`.`P_id` = $value[P_id] AND `B_status` = '0' ORDER BY `bidding`.`Bidding` DESC";
			$sql="SELECT $select FROM `$tablename` join $join WHERE $where";
			
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
			}
			if ($row) {
				$data[] = $row;
			}
			unset($row);
		}
	}
?>