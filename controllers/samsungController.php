<?php

include_once(ROOT . '/components/Router.php');

class SamsungController
{
//    public function __construct()
//    {
//        set_error_handler(array($this, 'ErrorCatcher'));
//
//
//        $errorVarArray['real index'] = true;
//        echo $errorVarArray['error index'];
//    }

    /**
     * @param $path = path to printer
     * @return false if in path  if no math by regular expression
     */


    public function actionSamsung()
    {
        $modelSamsung = new UpdateExistSamsung();
        $a = $modelSamsung->issetPrinter();
        return $a;




    }


//    }
    public function selectall()
    {
       $modelSsamsungSelect = new UpdateExistSamsung();
         return
         $modelSsamsungSelect->select();



    }


//    public function ErrorCatcher($errno, $errstr)
//    {
//        echo '<h1>cannot connect to printer </h1>';
//    }

//
//    public function actionHp()
//    {
//
//        $arrayofHps = [
//            'hp2472',
//            'hp2635',
//        ];
//        foreach ($arrayofHps as $oneHp) {
//            $path = file_get_contents('http://' . $oneHp . 'info_suppliesStatus.html?tab=Status&menu=SupplyStatus');
//            $regularExpression = '/remaining:\s([0-9]{1,3})/';
//            $check = preg_match_all($regularExpression, $path, $matches);
//            if ($check) {
//                $fullname = explode('"', $matches[0][0]);
//                $procentCartridge = explode(" ", $fullname[0]);
//            } else return false;
//            $check = preg_match('/model_name:\s"[a-zA-Z]{1,}\sSCX-[\d]{1,}[a-z]/', $path, $matches);
//            if ($check) {
//                $fullname = explode('"', $matches[0]);
//                $nameAndType = explode(" ", $fullname[1]);
//                var_dump($nameAndType);
//            } else return false;
//            if (parent::issetPrinter($procentCartridge[1], $nameAndType[0], $oneHp)) {
//                echo 'its ok';
//            }
//
//        }
//
//
//    }
//}

}


//
//$modelForSamsung = new UpdateExistSamsung;
//$modelForSamsung->issetPrinter($procentCartridge[1], $nameAndType[0], $oneSamsung);
//$modelForSamsung->select();
//var_dump($modelForSamsung)
$samung = new SamsungController();
$result = $samung->selectall();
$re = $samung->actionSamsung();
//var_dump($samung->selectAll());
//var_dump($resultSamsung)
//$resultOfall  = $samung->selectall(){};
//var_dump($resultOfall);
//foreach ($resultOfall as $all){

//var_dump($resultOfAll);
//($resultOfAll);