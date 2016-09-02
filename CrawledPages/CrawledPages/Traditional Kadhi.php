<?php
include_once('simple_html_dom.php');
$html = file_get_html('http://www.tarladalal.com/Traditional-South-Indian-Kadhi-34628r');
foreach($html->find('span#ctl00_cntrightpanel_lblRecipeName') as $h){
	echo '<h3 style="color:white;">'.$h->innertext.'</h3><br>';
	}
foreach($html->find('div#recipe_details_left') as $e){
	echo '<span style="color:white;">'.$e->innertext.'</span><br>';
}
	echo '<span style="color:white;">Ingredients</span><br>';
foreach($html->find('div#rcpinglist') as $f){
	echo '<span style="color:white;">'.$f->innertext.'</span><br>';
	}
foreach($html->find('div#ctl00_cntrightpanel_pnlRcpMethod') as $g){
	echo '<span style="color:white;">'.$g->innertext.'</span><br>';
	}
?>

<html>
<head>
<title></title>
<style>
body{
	background:url(http://2.bp.blogspot.com/--95DCJvQJ9E/UxYvMajWfmI/AAAAAAAAAUA/CV4IFFVm1CQ/s1600/DSC_0576.JPG) no-repeat;}
</style>
</head>
<body>
<iframe width="560" height="315" src="https://www.youtube.com/embed/ITJbPK22lFY" frameborder="0" allowfullscreen></iframe>
</body>
</html>