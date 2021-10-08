<?php
	include "maincode/config.php";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$email = $_POST['A_email']; 
		$sql = "SELECT * FROM `admin` WHERE `A_email` = '$email'";

		if($result = mysqli_query($conn, $sql)) {
			if (mysqli_num_rows($result) > 0) {
				$row = mysqli_fetch_assoc($result);
				$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$string_shuffled = str_shuffle($string);
				$otp = substr($string_shuffled, 1, 7);

				$insert = "INSERT INTO `otp` (`A_id`,`otp`) VALUES ('$row[A_id]','$otp')";
				mysqli_query($conn,$insert);

				$to = "$email";
				$subject = "A-Mart Smart Shopping";
				$title = "";
				$body = "<p>http://junoontrekking.in/test/Amart_332019/admin/resetpwd?u=$row[A_ID]&o=$otp</p>";

				include "maincode/mail.php";
			}
		}
		else
		{
			echo "<script>
			alert('you have no account');
			window.location.href='$f_redirect';
			</script>";
		}
		
	}
?>