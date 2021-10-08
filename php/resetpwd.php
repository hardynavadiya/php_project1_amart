<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$npass = md5($_POST["npass"]);
		$id = $_GET['u'];
		$otp = $_GET['o'];
		$sql = "SELECT * FROM `otp` WHERE `U_id` = '$id' AND `otp` = '$otp'";
	
		if($result = mysqli_query($conn, $sql)) {
			if (mysqli_num_rows($result) > 0) {
				$update="UPDATE `user` SET `U_password`='$npass' WHERE `U_id`='$id'";
				mysqli_query($conn,$update);
				echo "<script>
				alert('done');
				</script>";
			}
			else {
				echo "<script>
				alert('resend mail');
				</script>";
			}
		}
		else
		{
			echo "<script>
			alert('something went wrong');
			</script>";
		}
	}
?>