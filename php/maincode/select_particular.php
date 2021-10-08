<?php
	include "config.php";
	$sql="SELECT $select FROM `$tablename` WHERE $where";

	if($result = mysqli_query($conn, $sql)) {
		if (mysqli_num_rows($result) > 0) {
		    $row = mysqli_fetch_assoc($result);
		}
		else {
		    echo "<script>
			alert('$no_data');
			window.location.href='$f_no_redirect';
			</script>";
		}
	}
	else {
		// echo mysqli_error($conn);
		//  exit();
		echo "<script>
		alert('$f_msg');
		window.location.href='$f_redirect';
		</script>";
	}
?>