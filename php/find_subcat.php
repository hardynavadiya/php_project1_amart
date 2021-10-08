<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "sub_category";

		$f_no_redirect = "../product";
		$f_redirect = "../product";

		$no_data = "you have no data";
		$f_msg = "please contact developer";

		$select = "*";
		$where = "`Cat_id` = '$_GET[subcat]'";

		include "maincode/select_particular_array.php";
		foreach ($data as $key => $value) {
			?>
			<option value="<?php echo $value['Sub_cat_id'] ?>"><?php echo $value['Sub_cat_name']?></option>
			<?php
		}
	}
?>