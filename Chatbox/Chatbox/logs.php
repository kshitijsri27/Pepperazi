<?php
include 'connect.inc.php';
$result = "SELECT * FROM logs ORDER by id DESC";
$query_result = mysql_query($result);
while($row = mysql_fetch_array($query_result))
{
	echo "<span class='Email'>".$row['email']. "</span>: <span class='msg'>". $row['msg']."</span><br>";
	}

?>