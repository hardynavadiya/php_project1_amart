<?php
	//get image name (image is name of form image)
	$image = basename($_FILES[$img]["name"]);
	//print_r ($image);

	//  upload path varible + get image name
	$file=$dir.$image;
	//	echo $file;
	//image type extension
	$type=strtolower(pathinfo($file,PATHINFO_EXTENSION));
	//echo $type;
	
	//check file is image or not where tmp_name is default and it is use for the send the image on server through  temporary name
	$check = getimagesize($_FILES[$img]["tmp_name"]);
	//print_r($check);

	if($check == false) {
		echo "<script>
		alert ('file is not image');
		window.location.href='$f_redirect';
		</script>";
	}

	//file is already exist
	if(file_exists($file))
	{
		echo "<script>
		alert ('file is already exist');
		window.location.href='$f_redirect';
		</script>";
	}
	//check file size
	if($_FILES[$img]["size"] > 625000) {
		echo "<script>
		alert ('file is too large');
		window.location.href='$f_redirect';
		</script>";
	}

	//allow ceratain file format
	if($type != "jpg" && $type != "png" && $type !== "jpeg")
	{
		echo "<script>
		alert ('only allow jpg, png, jpeg ');
		window.location.href='$f_redirect';
		</script>";
	}
	move_uploaded_file($_FILES[$img]["tmp_name"], $file);
?>