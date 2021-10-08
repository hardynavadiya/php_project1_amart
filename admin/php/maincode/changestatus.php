<?php
	include "config.php";
	if($_SERVER["REQUEST_METHOD"]=="GET")
	{
		$sql="SELECT $columname FROM $tablename WHERE $where";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			$rows=mysqli_fetch_assoc($result);
			$status = $rows[$columname];
		}
		if($status==1)
		{
			$status=0;
		}
		elseif($status==0)
		{
			$status=1;
		}
		else
		{
			echo "not success";
		}
		$update ="UPDATE $tablename SET `$columname`='$status' WHERE $where";
		//echo $update;
		if(mysqli_query($conn,$update))
		{
			echo "<script>
			alert('$s_msg');
			window.location.href='$s_redirect';
			</script>";
		}
		else
		{
			echo "<script>
			alert('$f_msg');
			window.location.href='$f_redirect';
			</script>";
		}
	}
 ?>