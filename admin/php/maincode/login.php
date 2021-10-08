 <?php
	session_start();
	$A_password = md5($A_password);
	$sql1="SELECT $select FROM `$tablename` WHERE `A_email` = '$email' AND `A_status` = 1";
	//echo $sql1;

	if($result1 = mysqli_query($conn, $sql1)) {
		if (mysqli_num_rows($result1) > 0) {		
			$sql="SELECT $select FROM `$tablename` WHERE `A_email` = '$email' AND `A_password` = '$A_password'";	
			if($result = mysqli_query($conn, $sql)) {
				if (mysqli_num_rows($result) > 0) {	
			    	while($row = mysqli_fetch_assoc($result)){
						$_SESSION["A_ID"] = $row['A_id'];
						echo "<script>
						alert('$s_msg');
						window.location.href='$s_redirect';
						</script>";
					}					
				}
				else {
				    echo "<script>
					alert('$no_p_data');
					window.location.href='$f_no_redirect';
					</script>";
				}
			}
			else {
				echo "<script>
				alert('$f_msg');
				window.location.href='$f_no_redirect';
				</script>";
			}
		}
		else {
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