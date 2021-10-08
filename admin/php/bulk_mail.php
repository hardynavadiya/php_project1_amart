<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$mail = $_POST['mail'];
		$tablename = "user";

		$select = "`U_email`";


		include "maincode/select.php";
		
		foreach ($data as $key => $value) {
			$to = $value['U_email'];
			$subject = "A-mart Smart Shopping ";
			$title = "";
			$body = $mail ;
			include "maincode/mail.php";

			echo "<script>
			alert('Mail is Send');
			window.location.href='../dashboard';
			</script>";
		}
	}
?>