<?php
		session_start();
		unset($_SESSION[U_id]);
		echo "<script>
		window.location.href='../index';
		</script>";
		
?>