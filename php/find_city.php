<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$tablename = "cities";

		$f_no_redirect = "";
		$f_redirect = "";

		$no_data = "";
		$f_msg = "";

		$select = "*";
		$where = "State_id = $_GET[state]";

		include "maincode/select_particular_array.php";
		foreach ($data as $key => $value) {
		?>
		<option value="<?php echo $value['City_id'] ?>"><?php echo $value['City_name']?></option>
		<?php
		}
	}
?>