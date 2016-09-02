<?php
require 'connect.inc.php';

if(isset($_GET["area"])){
	$area=$_GET["area"];
	$query = "SELECT restaurants.Name FROM restaurants WHERE restaurants.Area Like '".$area."'";
	$query_run=mysql_query($query);
	$Restaurants = array();
	echo "<select name='Name'>";
					while($row = mysql_fetch_array($query_run)){
						echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
						array_push($Restaurants, $row['Name']);
						}
						echo "</select>";
						//print_r($Restaurants);
					
}

?>