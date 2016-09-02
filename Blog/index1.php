<?php
session_start();
require('connect.inc.php');

$query=mysql_query("SELECT * FROM posts");
$post_count=$query;
$v=mysql_num_rows($query);


$query1=mysql_query("SELECT * FROM comments");
$comment_count=$query1;
if(isset($_POST['submit']))
{
	$newCategory=$_POST['newCategory'];
	$newquery = "INSERT INTO categories (`category_id` , `category`) VALUES ('','$newCategory')";
	if($query_run=mysql_query($newquery))
	{
	echo "New Category Added";	
	}
	else{
		echo "error";
	}

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body{
}
#container{
	padding: 10px;
	width: 800px;
	margin: auto;
	background:white;
}
#menu{
	height:40px;
	line-height:40px;
}
#menu ul
{
	margin:0;
	padding:0;
}
	
#menu ul li{
	display:inline;
	list-style:none;
	margin-right:10px;
	font-size:18px;
}
#mainContent{
	clear:both;
	margin-top:5px;
	font-size:25px;
}
#header{
	height:80px;
	line-height:80px;
}
#container #header #h1{
	font-size: 45px;
	margin: 0;
}
</style>
</head>
<body>
<div id="container">
  <div id="menu">
    <ul
  >
      <li><a href='#'>Home</a></li>
      <li><a href="#">Create New Post</a></li>
      <li><a href="#">Delete Post</a></li>
      <li> <a href="logout.php"> Log Out</a></li>
      <li><a href="#">Blog Home Page</a></li>
    </ul>
  </div>
  <div id="mainContent">
    <table>
      <tr>
        <td>Total Blog Post</td>
        <td><?php echo $v?></td>
      </tr>
      <tr>
        <td>Total Comments</td>
        <td><?php $h=mysql_num_rows($query1); ?></td>
        <td><?php echo $h;?></td>
      </tr>
    </table>
  </div>
  <div id="categoryForm">
  <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"/>
  <label for="category"/>Add new Category </label><input type="text" name="newCategory"/><input type="submit" name="submit" value="submit"/>
  </form>
  </div>
</div>
</body>
</html>