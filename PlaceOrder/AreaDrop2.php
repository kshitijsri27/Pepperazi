<?php
	require 'connect.inc.php';
	$query = "SELECT DISTINCT Area FROM restaurants";
	$query_run=mysql_query($query);
	
	$area = array();
	
	while($row = mysql_fetch_array($query_run)){
		array_push($area, $row['Area']);
		}
		//print_r($area);
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>