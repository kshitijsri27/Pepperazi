<?php
include_once('simple_html_dom.php');
$html = file_get_html('http://simpleindianrecipes.com/wontonsoup.aspx');
foreach($html->find('div#c_H1_Print') as $e)
    echo $e->innertext . '<br>';
?>