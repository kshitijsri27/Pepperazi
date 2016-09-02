<?php
session_start();
require('connect.inc.php');
if(isset($_POST['submit'])){
$user=$_POST['username'];
$pwrd=$_POST['pwrd'];
	
$query ="INSERT INTO user (`username` , `password`) VALUES ('$user','$pwrd')";

	$pwrd=md5($pwrd);
	$query_run = mysql_query($query);
	if($query_run = mysql_query($query))
	{
		echo "Succes";
	}
	if(empty($user)||empty($pwrd))
{
	echo "MISSING INFORMATION";
}
if(mysql_num_rows($query_run)>0)
{
	while($row=mysql_fetch_array($query))
	{
		$_SESSION['user_id']=$row['user_id'];
		
	}
	header('Location: index.php');
		exit();
}
else{
	echo 'Missing Information';
}
}

?>

<body>
<div id="container">
<form action="login.php" method="post">
<p>
<label>Username</label><input type="text" name="username" />
</p>
<p>
<label>Password</label><input type="password" name="pwrd" />
<br />
<br />
<input type="submit" name="submit" value="LOGIN" />
</form>
</div>
</body>
</html>