<?php
require 'connect.inc.php';

$subject = 'Pepperazi Subscription';
$body = "You have successfully subscribed to Pepperazi newsletter. You will get our latest updates, coupons and additions.";
$headers = 'From: teampepperazi <admin@pepperazi.in>';
if(isset($_POST['email'])){
	$email = $_POST['email'];
	if(!empty($email)){
	
			$query = "SELECT Email FROM subscribe WHERE email='".mysql_real_escape_string($email)."'";
    		$query_run = mysql_query($query);
                        if(mysql_num_rows($query_run)==1){
                          		echo 'The email '.$email.' alredy exists';
                        	}else{
									$query = "INSERT INTO subscribe VALUES ('','".mysql_real_escape_string($email)."')";
                             		if($query_run = mysql_query($query)){
								 	@mail($email, $subject, $body, $headers);
									echo "your email has been successfully registered";
								}
                      		}
}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<h3>To Subscribe:</h3>
<form method="post">
<input type="email" placeholder="Please enter your email address" style="width:300px;" name="email"><pre></pre><input type="submit" value="Subscribe">
</form>
</body>
</html>