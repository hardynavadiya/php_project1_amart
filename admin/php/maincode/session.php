<?php
	session_start();
	if (!isset($_SESSION["A_ID"]) && empty($_SESSION["A_ID"]))
	{
		echo "<script>
		alert('please login');
		window.location.href='index.php';
		</script>";
	}
	/*else
	{
		echo "success";
	}
*/
?>