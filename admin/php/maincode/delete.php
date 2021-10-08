<?php
	$sql = "DELETE FROM `$tablename` WHERE $where ";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert ('$s_msg');
		window.location.href='$s_redirect';
		</script>";
	}
	else
	{
		//echo mysqli_error($conn);
		// exit();
		echo "<script>
		alert ('$f_msg');
		// window.location.href='$f_redirect';
		</script>";
	}
?>