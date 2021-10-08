<?php
	session_start();
	if (!isset($_SESSION["U_id"]) && empty($_SESSION["U_id"]))
	{
		echo "<script>
				alert('Please Login');
				window.location.href='login';
		</script>";
	}
	// else
	// {
	// 	echo "success";
	// }
?>