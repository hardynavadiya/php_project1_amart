<?php
$to = "hardinavdiya@gmail.com";
$subject = "A-Mart smart Shopping";

$message = "
<html>
<head>
<title>A-Mart smart Shopping</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <info.amart@gmail.com>' . "\r\n";
$headers .= 'Cc: info.amart@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>