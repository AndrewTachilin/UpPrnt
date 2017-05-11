<?php
include_once ('simple_html_dom.php');

$html = file_get_html('http://xr6696/status/consumables.php');


foreach( $html->find('/html/body/div[1]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e1) {
    echo $e1->innertext . '<br>';
}
foreach( $html->find('/html/body/div[2]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e2) {
    echo $e2->innertext . '<br>';
}
foreach( $html->find('/html/body/div[3]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e3) {
    echo $e3->innertext . '<br>';
}foreach( $html->find('/html/body/div[4]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e4) {
    echo $e4->innertext . '<br>';
}
