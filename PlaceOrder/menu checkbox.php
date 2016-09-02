<?php
if(isset($_GET['Restaurants'])){
	
	//require 'connect.inc.php';
	$Restaurants=$_GET['Restaurants'];
	$query = "SELECT menu2.items, menu2.price FROM menu2, restaurants WHERE restaurants.Name Like '".$Restaurants."' AND menu2.Id=restaurants.Id";
	$query_run = mysql_query($query);
	$Menu = array();
	//echo "<br><br><select name='items'>";
					while($row = mysql_fetch_array($query_run)){
						echo "<input type='checkbox' value='".$row['items']."'>";
						echo $row['items'];
						array_push($Menu, $row['items']);
						}
						
					//echo "</select>";
						print_r($Restaurants);
					
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