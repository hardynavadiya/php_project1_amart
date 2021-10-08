<?php
	include "config.php";
	$sql="SELECT $select FROM `$tablename` WHERE $where";
	$result=mysqli_query($conn,$sql);
		 
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<option value='$row[$columname]'>$row[$columname1]</option>";
		}
	}
?>