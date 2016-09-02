<?php
require 'connect.inc.php';
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['text'];
	$subject = 'Thank you for submiting your query';
	$body = "Your query have been registered with us we will get back to you as soon as possible.";
	$headers = 'From: teampepperazi <admin@pepperazi.in>';
	if (!empty($email) && !empty($name) && !empty($text)){
		$query = "INSERT INTO contact_us VALUES ('','".mysql_real_escape_string($name)."','".mysql_real_escape_string($email)."','".mysql_real_escape_string($text)."')";
                             if($query_run = mysql_query($query)){
								 echo "We have submitted your query we will get back to you as soon as possible";
								 mail($email, $subject, $body, $headers);
							 }
							 
		}else{
			echo "All fields must be filled so we can contact you. Please fill all the fields";
			 			}
	}else{
		echo "Sorry we can't connect with you right now.Please try again";
		}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Us</title>
</head>

<body>
<form method="POST">
<input type="text" placeholder="Name" name="name"><br><br>
<input type="email" placeholder="Email" name="email"><br><br>
<textarea placeholder="Please enter your text" name="text" style="width:300px; height:100px;"></textarea><br><br>
<input type="submit" value="Submit">
</form>
</body>
</html>