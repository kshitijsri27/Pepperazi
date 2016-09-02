<?php

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Chat Box</title>
<link rel="stylesheet" type="text/css" href="chat.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script>
function submitchat(){
	if(form1.email.value == '' || form1.msg.value == '')
	{
		alert('All Fields Are Mandatory!!!');
		return;
		}
		form1.email.readOnly = true;
		form1.email.style.border = 'none';
		var email = form1.email.value;
		var msg = form1.msg.value;
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function(){
			if(xmlhttp.readyState==4 && xmlhttp.status==200){
				document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open('GET','insert.php?email='+ email+'&msg='+msg,true);
			xmlhttp.send();
}
			$(document).ready(function(e) {
                $.ajaxSetup({cache:false});
				setInterval(function() {$('#chatlogs').load('logs.php');}, 2000);
            });
	
</script>
</head>

<body>
<form name="form1">
Enter Your email: <input type="email" name="email" style="width:200px;"><br>
Your Message:<br>
<textarea name="msg" style="width:200px; height:70px;"></textarea><br>
<a href="#" onclick="submitchat()" class="button">Send</a><br><br>

<div id="chatlogs">
Loading Chat logs PLEASE WAIT...<img src="loading8.gif">
</div>
</body>
</html>