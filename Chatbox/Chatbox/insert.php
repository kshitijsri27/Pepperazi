<?php
include 'connect.inc.php';
$email = $_REQUEST["email"];
$msg = $_REQUEST["msg"];
$query = $query = "INSERT INTO logs (`email` , `msg`) VALUES ('$email','$msg')";
$query_run = mysql_query($query);
$result = "SELECT * FROM logs ORDER by id DESC";
$query_result = mysql_query($result);
while($row = mysql_fetch_array($query_result))
{
	echo "<span class='Email'>".$row['email']. "</span>: <span class='msg'>". $row['msg']."</span><br>";
	}
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>chatbox php</title>
</head>

<body>
</body>
</html>