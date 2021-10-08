<?php
	include "maincode/config.php";

		$tablename = "product";

		$f_no_redirect = "";
		$f_redirect = "";

		$s_msg = "";
		$no_data = "you have no nodata";
		$f_msg = "failed,";

		$select = "*";
		$where = "`P_status` = '1' AND `P_u_status` = '1'";

		include "maincode/select_particular_array.php";
		$new_arrival = $data;
		unset($data);
?>