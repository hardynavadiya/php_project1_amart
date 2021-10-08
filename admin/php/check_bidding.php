<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$tablename = "order";

		$s_redirect = "";
		$f_redirect = "";

		$s_msg = "";
		$f_msg = "";
		
		$keys = array_keys($_POST);
		$columnname = implode("`,`",$keys);
		$values = implode("','", $_POST);
		$sql = "INSERT INTO `$tablename` (`$columnname`) VALUES ('$values')";
		mysqli_query($conn,$sql);
		
		$sql="UPDATE `bidding` SET `B_status`='1' WHERE `P_id`='$_POST[P_id]'";
		if(mysqli_query($conn,$sql))
		{
			echo "<script>
			alert('Highest Bidding Product is Sell');
			window.location.href='../highest_bidding';
			</script>";
		}
		else
		{
			echo "<script>
			alert('Highest Bidding Product is not Sell');
			</script>";
		}
	}
?>