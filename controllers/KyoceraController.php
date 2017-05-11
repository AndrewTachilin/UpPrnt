<?php
include_once ('simple_html_dom.php');
/**
 * Created by PhpStorm.
 * User: Andrew-t-t
 * Date: 20.03.2017
 * Time: 11:34
 */

class KyoceraController
{
    public function actionKyocera()
    {
        $path = [
            'html/framset/frame/html/#main/form/div#maindaivindex/div#containt/div#rightcomn/div#tonerid/div#toner/html/body#tonerpage/form/#content/div#outerdiv/#contentrow/tbody/tr/td'

        ];

        $html = file_get_html('http://xr6696/status/consumables.php');


        foreach( $html->find($path) as $e1) {
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


    }


}