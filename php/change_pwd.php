<?php
	include "maincode/config.php";
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$opass=md5($_POST["opass"]);
		$npass=md5($_POST["npass"]);

		$sql="SELECT * FROM `user` WHERE `U_password`='$opass' AND `U_id`='$_SESSION[U_id]'";
		$result=mysqli_query($conn,$sql);
		// print_r($result);
		
		if(mysqli_num_rows($result)>0)
		{
			$sql="UPDATE `user` SET `U_password`='$npass' WHERE `U_id`='$_SESSION[U_id]'";
			  // echo $sql;
			
			if(mysqli_query($conn,$sql))
			{
				// echo "<script>alert('vsndnsd');</script>";
				echo "<script>
				alert('change password successfully');
				window.location.href='../index';
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