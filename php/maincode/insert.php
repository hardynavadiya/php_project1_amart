 <?php
 	include "config.php";
	$sql = "INSERT INTO `$tablename` (`$columname`) VALUES ('$values')";
	if(mysqli_query($conn,$sql))
	{
		echo "<script>
		alert('$s_msg');
		window.location.href='$s_redirect';
		</script>";
	}
	else
	{
		echo mysqli_error($conn);
		// echo "<script>
		// alert('$f_msg');
		// window.location.href='$f_redirect';
		// </script>";
	}
?>