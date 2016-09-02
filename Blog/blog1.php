<?php
require('connect.inc.php');
$query="SELECT post_id,title,body FROM posts";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style>
#container{
	margin:auto;
	width:800px;
}
</style>
<body>
<div id="container">
<?php 
if($result=mysql_query($query))
{
while ($row = mysqli_fetch_assoc($result)) ;

?>
<article>
<h2><?php echo $row["title"];?></h2>
<p><?php echo $row["body"];
 mysqli_free_result($result);}
 ?></p>
</article>
</div>
</body>
</html>