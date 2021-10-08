<?php
	include "maincode/config.php";
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$opass=md5($_POST["opass"]);
		$npass=md5($_POST["npass"]);

		$sql="SELECT * FROM `admin` WHERE `A_password`='$opass' AND `A_id`='$_SESSION[A_ID]'";
		$result=mysqli_query($conn,$sql);
		
		if(mysqli_num_rows($result)>0)
		{
			$sql="UPDATE `admin` SET `A_password`='$npass' WHERE `A_id`='$_SESSION[A_ID]'";
			if(mysqli_query($conn,$sql))
			{
				echo "<script>
				alert('change password successfully');
				window.location.href='../dashboard';
				</script>";
			}
			else
			{
				echo "<script>
				alert('change password is incorrect');
				</script>";
			}
		}
		else
		{
			echo "<script>
			alert('old password is incorrect');
			window.location.href='../change_pwd';
			</script>";
		}
	}
?>