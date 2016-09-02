<?php
	include 'areaRestaurants.php';
	require 'connect.inc.php';
	$query = "SELECT DISTINCT Area FROM restaurants";
	$query_run=mysql_query($query);
	$area=array();
					echo "<select name='Area'>";
					while($rows = mysql_fetch_array($query_run)){
						echo "<option value='".$rows['Area']."'>".$rows['Area']."</option>";
						array_push($area, $rows['Area']);
						}
						echo "</select>";
						//print_r($area);			

//if(isset($_GET["area"])){
	//area();
	/*
	//require 'connect.inc.php';
	$area=$_GET["area"];
	$query = "SELECT restaurants.Name FROM restaurants WHERE restaurants.Area Like '".$area."'";
	$query_run=mysql_query($query);
	$Restaurants = array();
	echo "<br><br><select name='Name'>";
					while($row = mysql_fetch_array($query_run)){
						echo "<option value='".$row['Name']."'>".$row['Name']."</option>";
						array_push($Restaurants, $row['Name']);
						}
					echo "</select>";
						//print_r($Restaurants);
					
*/
//}
?>