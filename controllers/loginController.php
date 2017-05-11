<?php


class loginController{

    public function actionList(){
        echo 'loginController,actionIndex';
        return true;
    }

}
foreach( $html->find('/html/body/div[1]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e1) {
    $toner = $e1->innertext . '<br>';
}
foreach( $html->find('/html/body/div[2]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e2) {
    $print = $e2->innertext . '<br>';
}
foreach( $html->find('/html/body/div[3]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e3) {
    $fuser = $e3->innertext . '<br>';
}foreach( $html->find('/html/body/div[4]/div[2]/table/tbody/tr[2]/td[4]/table/tbody/tr/td[1]') as $e4) {
    $transferRoll =  $e4->innertext . '<br>';
}
