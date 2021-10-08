 <?php
 	include "config.php";
	session_start();
	$U_password = md5($U_password);

	$sql1="SELECT $select FROM `$tablename` WHERE `U_email` = '$U_email' AND `U_status` = 1";
	if($result1 = mysqli_query($conn, $sql1)) {
		if (mysqli_num_rows($result1) > 0) {
			$sql="SELECT $select FROM `$tablename` WHERE `U_email` = '$U_email' AND `U_password` = '$U_password'";
				if($result = mysqli_query($conn, $sql)) {
					if (mysqli_num_rows($result) > 0) {
						while($row = mysqli_fetch_assoc($result)){
							$_SESSION['U_id'] = $row['U_id'];
								echo "<script>
								alert('$s_msg');
								window.location.href='$s_redirect';
								</script>";
							}
						}
				else {
					//echo mysqli_error($conn);
					echo "<script>
					alert('$no_p_data');
					window.location.href='$f_no_redirect';
					</script>";
					}
				}
		else {
			//echo mysqli_error($conn);
			echo "<script>
			alert('$f_msg');
			window.location.href='$f_no_redirect';
			</script>";
			}
		}
	else {
		//echo mysqli_error($conn);
		echo "<script>
		alert('$no_data');
		window.location.href='$f_no_redirect';
		</script>";
		}
	}
	else
	{
		// echo mysqli_error($conn);
		// exit();
		echo "<script>
		alert('$f_msg');
		window.location.href='$f_redirect';
		</script>";
	}
?>