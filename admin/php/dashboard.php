<?php
	include "maincode/config.php";
	$sql="SELECT * FROM `user`";
	$result = mysqli_query($conn, $sql);
	$user = $result->num_rows;

	$sql="SELECT * FROM `product` WHERE `P_type` = 0";
	$result = mysqli_query($conn, $sql);
	$product = $result->num_rows;

	$sql="SELECT * FROM `product` WHERE `P_type` = 1";
	$result = mysqli_query($conn, $sql);
	$wo_product = $result->num_rows;
	
	$sql="SELECT * FROM `order`";
	$result = mysqli_query($conn, $sql);
	$order = $result->num_rows;
?>