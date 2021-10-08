<?php
		session_start();
		unset($_SESSION[A_id]);
		echo "<script>
		window.location.href='../index';
		</script>";
		
?>