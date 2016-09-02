<?php
include_once('simple_html_dom.php');
$html = file_get_html('http://www.tarladalal.com/Indian-Margarita-(-Diabetic-Recipe-)-33779r');
foreach($html->find('span#ctl00_cntrightpanel_lblRecipeName') as $h){
	echo '<h3>'.$h->innertext.'</h3><br>';
	}
foreach($html->find('div#recipe_details_left') as $e){
    echo $e->innertext.'<br>';
	}
	echo 'Ingredients<br>';
foreach($html->find('div#rcpinglist') as $f){
	echo $f->innertext.'<br>';
	}
foreach($html->find('div#ctl00_cntrightpanel_pnlRcpMethod') as $g){
	echo $g->innertext.'<br>';
	}
?>