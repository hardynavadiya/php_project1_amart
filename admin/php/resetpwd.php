<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$npass = md5($_POST["npass"]);
		$id = $_GET['a'];
		$otp = $_GET['o'];
		$sql = "SELECT * FROM `otp` WHERE `A_id` = '$id' AND `otp` = '$otp'";
		
		if($result = mysqli_query($conn, $sql)) {
		
			if (mysqli_num_rows($result) > 0) {
				$update="UPDATE `admin` SET `A_password`='$npass' WHERE `A_id`='$id'";
				mysqli_query($conn,$update);
			}
		}
		else
		{
			echo "<script>
			alert('something went wrong');
			window.location.href='../resetpwd.php';
			</script>";
		}
	}
?>