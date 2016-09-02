<?php
if(isset($_GET['Area'])){
	require 'connect.inc.php';
	
	$restaurant = array();
	
	$query = "SELECT restaurants.Name FROM restaurants WHERE restaurants.Area Like '".$Area."'";
	
	$query_run=mysql_query($query);
	
	$restaurant = array();
	while($row = mysql_fetch_array($query_run)){
		array_push($restaurant, $row['Name']);
		}
		//print_r($area);
}
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